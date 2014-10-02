<?php
	class uploadFile {
			
		public static function fileUpload($file){
			$handle = fopen($file, "r");
			return $handle;
		}
	}
?>