<?php

	class fileHandling {
		
		//Function for checking if the csv file has column headings. 
		//Combines an array of column headings and an array of data. 
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
				return $records;
		}
		
		//Function for getting the proper readable names for the headings. 
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
				
				return $records;
		}
	}
?>