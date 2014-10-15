<?php

	namespace Classes\File;
	
	class fileHandling implements \Interfaces\fileHandling{
		
		
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