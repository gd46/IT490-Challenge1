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
				return $records;
		}
	}
?>