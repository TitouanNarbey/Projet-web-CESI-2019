<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use ZipArchive;
use Auth;

/*
*Controller of the dowloading of all the images
*/
class DownloadController extends Controller
{
	/*
	*download all the images
	*/
	public function downloadAllImages(){

		if(Auth::user() !== null)
        {
            if(Auth::user()->id_roles == 3)
            {
				$files = array();

				$images = Image::all();

				foreach($images as $image)
				{
					if($image->path[0] == '/')
					{
						array_push($files, '.'.$image->path);
					}
				}
				
				//create new zip opbject
				$zip = new ZipArchive();
			
				//create a temp file & open it
				$tmp_file = tempnam('.','');
				$zip->open($tmp_file, ZipArchive::CREATE);

				//loop through each file
				foreach($files as $file)
				{
					//download file
					$download_file = file_get_contents($file);
					//add it to the zip
					$zip->addFromString(basename($file),$download_file);
				}

				//close zip
				$zip->close();

				//send the file to the browser as a download
				header('Content-disposition: attachment; filename=BDE-CESI-Lyon_AllImages.zip');
				header('Content-type: application/zip');
				readfile($tmp_file);
			}
			else
			{
				return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
			}
		}
		else
		{
			return redirect('/home')->with('messageRed', 'Vous n\'avez pas le droit d\'accéder à cette page.');
		}
	}
}
