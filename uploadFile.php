<?php
	
	class uploadFile {
	
		public function __construct() {
			
		}
		
		public static function fileUpload($file){
			$handle = fopen($file, "r");
			return $handle;
		}
		
		public static function closeFile($handle){
			fclose($handle);
		}
	}
?>