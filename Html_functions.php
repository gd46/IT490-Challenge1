<?php
	
	
	class Html_functions{
		
		//Function for printing a table by passing in an array, and passing in one url variable. 
		public static function printVerticaltable($records,$headings){
			if(isset($_GET['record'])){
				$table = '<div id="verticalTable"><table border="1">';
				$i = 0;
				foreach($records[$_GET['record'] as $key => $value){
					$table .= '<tr><th>' . $headings[$i]['varTitle'] . '</th>';
					$table .= '<td>' . $value . '</td></tr>';
					$i++;
				}
				$table .= '</table></div>';
				echo $table;
			}
		}
	}
?>