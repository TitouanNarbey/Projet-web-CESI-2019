<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Exception\PayPalConnectionException;
use Session;
use App\Order;
use App\Comanded;

/*
*Controller of the PayPal API
*/
class PaymentController extends Controller
{
    public function __construct()
    {
        //PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function payWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_1 = new Item();
        $item_1->setName('Item 1') //item name 
                ->setCurrency('EUR')
                ->setQuantity(1)
                ->setPrice($request->get('amount')); //unit price 
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
        $amount = new Amount();
        $amount->setCurrency('EUR')
                ->setTotal($request->get('amount'));
        $transaction = new Transaction();
        $transaction->setAmount($amount)
                    ->setItemList($item_list)
                    ->setDescription('Your transaction description');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('home')) //Specify return URL 
                        ->setCancelUrl(URL::route('home'));
        $payment = new Payment();
        $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));

        //dd($payment->create($this->_api_context));exit; 
        try 
        {
            $payment->create($this->_api_context);
        } 
        catch (\PayPal\Exception\PPConnectionException $ex) 
        {
            if(\Config::get('app.debug')) 
            {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('paywithpaypal');
            } 
            else 
            {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('paywithpaypal');
            }
        }

        foreach ($payment->getLinks() as $link) 
        {
            if($link->getRel() == 'approval_url') 
            {
                $redirect_url = $link->getHref();
                break;
            }
        }

        $id_order = request('id_order');
        $obj = Order::find($id_order);
        $obj->update(['paid' => 1]);

        //add payment ID to session
        Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) 
        {
            //redirect to paypal
            return Redirect::away($redirect_url);
        }
        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('paywithpaypal');
    }
}