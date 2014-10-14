<?php

	namespace Classes\File;

	interface fileHandling_template{
		public function checkColumnheadings($handle, $hasColumnheadings);
	}
	
	class fileHandling implements fileHandling_template{
		
		
		public function checkColumnheadings($handle, $hasColumnheadings){
			
			while(($row = fgetcsv($handle, ",")) !== FALSE){
					if($hasColumnheadings){
						$column_heading = $row;
						$hasColumnheadings = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[] = $record;
					}
				}
				\Classes\File\manageFile::closeFile($handle);
				return $records;
		}
	}
?>