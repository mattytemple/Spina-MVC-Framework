<?php
// The images class extends the files class with a number of image specific methods
// The iamges class also includes an image upload method that classes on save_upload() from the parent
//
// RESIZE
// the images class also includes a resizing method for creating images at any size
// resize() takes a the following args
// 			$file, the original file you want to resize
//			$newwidth - (optional) the width you want the new image to be
//			$newheight - (optional) the height you wna the new image to be
//			$percent - (optional) the percentage to reduce the image by
// resize() returns the name of the newly resized image

class images extends files {
	function __construct() {
		parent::__construct();	
	}
	function save_iamge($file) {
		$types = array('image/jpeg', 'image/gif', 'image/png'); // set acceptable upload types
		$filename = parent::save_upload($file, $types, 'uploads'); // save file to server
		return $filename;
	}
	function resize($file, $newwidth = 0, $newheight = 0, $percent = 0) {
		// Get new sizes
		if($newwidth != 0 && $newheight != 0) { // if height and width are set
			list($width, $height, $type) = getimagesize($file);
			$newwidth = $newwidth;
			$newheight = $newheight;
		} elseif($percent != 0) { // if percentage is set
			list($width, $width, $type) = getimagesize($file);
			$newwidth = $width * $percent;
			$newheight = $width * $percent;	
		}
		// Load
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		switch($type) { 
			case 'image/gif': 
				$source = ImageCreateFromGIF($file);
				$transparent_index = ImageColorTransparent($source); 
		        if($transparent_index!=(-1)) $transparent_color = ImageColorsForIndex($source,$transparent_index); 
				break; 
			case 'image/jpeg': 
				$source = ImageCreateFromJPEG($file); 
				break; 
			case 'image/png': 
				$source = ImageCreateFromPNG($file); 
				ImageAlphaBlending($source,true); 
		        ImageSaveAlpha($source,true); 
				break; 
			default: 
				return false; 
				break; 
		}
		// Resize
		if(imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height)) {
			return $thumb;
		} else {
			return false;
		}
	}
}
?>