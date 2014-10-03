<?php
	
	
	class Html_functions{
		
		//Function for printing a table by passing in an array, and passing in one url variable. 
		public static function printTable($records,$url_var){
			if(isset($_GET[$url_var])){
				$file2 = uploadFile::fileUpload('hd2013_varlist.csv');
				$headings = fileHandling::getHeadings($file2,TRUE);
				echo '<table border="1">';
				foreach($records[$_GET[$url_var]] as $key => $value){
					echo '<tr><th>' . $headings[$key] . '</th>';
					echo '<td>' . $value . '</td></tr>';
				}
				echo '</table>';
			}
		}
	}
?>