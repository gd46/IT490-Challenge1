<?php
	class Html_functions{
		
		public static function printTable($records,$url_var){
			if(isset($_GET[$url_var])){
				echo '<table border="1">';
				foreach($records[$_GET[$url_var]] as $key => $value){
					echo '<tr><th>' . $key . '</th>';
					echo '<td>' . $value . '</td></tr>';
				}
				echo '</table>';
			}
		}
	}
?>