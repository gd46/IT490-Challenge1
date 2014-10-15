<?php
	
namespace Interfaces;

interface manageFile{
		public static function uploadFile($file);
		public static function closeFile($handle);
	}
?>