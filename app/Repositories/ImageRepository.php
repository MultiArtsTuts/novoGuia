<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use Image;

class ImageRepository
{
	public function saveImage($image, $nameCli, $dir, $size)
	{
		if (!is_null($image)) {
			$file = $image;
			$extension = $image->getClientOriginalExtension();

			// $fileName = time() . random_int(100, 999) .'.' . $extension;
			$fileName = \str_slug($nameCli, '-') .'.' . $extension;
			// $destinationPath = public_path('uploads/'.$type.'/'.$nameCli.'/');
			$destinationPath = public_path('uploads/'.$dir.'/');
			// $url = 'http://'.$_SERVER['HTTP_HOST'].'/uploads/'.$type.'/'.$id.'/'.$fileName;
			$url = 'http://'.$_SERVER['HTTP_HOST'].$destinationPath.$fileName;
			$fullPath = $destinationPath.$fileName;
			if (!file_exists($destinationPath)) {
				File::makeDirectory($destinationPath, 0777, true);
			}
			$image = Image::make($file)
				->resize($size, null, function ($constraint) {
				  $constraint->aspectRatio();
				})
				->encode('jpg');
			$image->save($fullPath, 100);
			//return $url;
		} else {
			return 'http://'.$_SERVER['HTTP_HOST'].'/uploads/'.$type.'/placeholder300x300.jpg';
		}
	}
}
