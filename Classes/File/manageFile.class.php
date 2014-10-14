<?php
	
	namespace Classes\File;

	//Interfaces declare what methods need to be created when using a class.
	interface manageFile_Template{
		public static function uploadFile($file);
		public static function closeFile($handle);
	}
	class manageFile implements manageFile_Template{
		
		//Function for uploading a file for reading.	
		public static function uploadFile($file){
			$handle = fopen($file, "r");
			return $handle;
		}
		
		//Function for closing the file once it is done being used. 
		public static function closeFile($handle){
			fclose($handle);
		}
	}
?>