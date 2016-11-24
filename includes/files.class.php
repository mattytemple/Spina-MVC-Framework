<?php
// The files class has a number of methods for working with files
//
// SAVE UPLOAD
// the method save_upload() cam be used to validate and save any file you want the user to be able to upload.
// save_upload() takes 3 args:
//		$file - this is the name of the field on your upload form
//		$types - this is an array of the file types you wnat to accept e.g array('image/jpeg', 'image/gif', 'image/png') for images
//		$uploaddir - this is the folder on your server you want the file to be saved in
// files uploaded are renamed to a has of the current time + the original file name to prevent overwriting of exsisting files'

class files {
	function save_upload($file, $types, $uploaddir) {
		if (in_array($_FILES[$file]['type'], $types)) {
			// get extension of file
			$extension = pathinfo($_FILES[$file]['name'], PATHINFO_EXTENSION);
			// build name of file
			$time = date("H:i:s");
			$fname = md5($time . basename($_FILES[$file]['name']));
			$filename = $fname . "." . $extension;
			// set location of file
			$uploaddir = $_SERVER['DOCUMENT_ROOT'] . $uploaddir; 
			$path = $uploaddir . $filename;	
			copy($_FILES[$file]['tmp_name'], $path);
			return $path;
		} else {
			return false;	
		}
	}
	function file_to_array($sperator, $file) {
		$contents = file_get_contents($file);
		$parts = explode($sperator, $contents);
		return $parts;
	}
}
?>