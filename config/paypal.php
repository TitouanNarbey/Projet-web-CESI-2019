<? php 

return [ 
    'client_id' => env ('PAYPAL_CLIENT_ID', ''), 
    'secret' => env ('PAYPAL_SECRET', ''), 
    'settings' => array ( 
        'mode' => env (' PAYPAL_MODE ',' bac à sable '), 
        ' http.ConnectionTimeOut '=> 30, 
        ' log.LogEnabled '=> true, 
        ' log.FileName '=> chemin_stockage ().' /Logs/paypal.log ', 
        ' log.LogLevel '=>' ERROR ' 
    ), 
    
];