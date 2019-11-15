<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use ZipArchive;

class DownloadController extends Controller
{
	public function downloadAllImages(){

		$files = array(); /*Image array*/

		$images = Image::all();

		foreach($images as $image)
		{
			if($image->path[0] == '/')
			{
				array_push($files, '.'.$image->path);
			}
		}
	
		# create new zip opbject
		$zip = new ZipArchive();
	
		# create a temp file & open it
		$tmp_file = tempnam('/tmp/','');
		$zip->open($tmp_file, ZipArchive::CREATE);

		# loop through each file
		foreach($files as $file)
		{
			# download file
			$download_file = file_get_contents($file);
			#add it to the zip
			$zip->addFromString(basename($file),$download_file);
		}

		# close zip
		$zip->close();

		# send the file to the browser as a download
		header('Content-disposition: attachment; filename=BDE-CESI-Lyon_AllImages.zip');
		header('Content-type: application/zip');
		readfile($tmp_file);
	}
}
