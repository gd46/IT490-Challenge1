<?php
	
	namespace Classes\File;

	class manageFile{
		
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