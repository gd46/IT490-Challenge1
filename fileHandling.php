<?php

	class fileHandling {
		
		
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
				uploadFile::closeFile($handle);
				return $records;
		}
		
		public static function getHeadings($handle, $hasColumnheadings){
			$records = [];
			while(($row = fgetcsv($handle)) !== FALSE){
					
					if($hasColumnheadings){
						$column_heading = $row;
						$hasColumnheadings = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[$record['varname']] = $record['varTitle'];
					}	
					
				}
				uploadFile::closeFile($handle);
				return $records;
		}
	}
?>