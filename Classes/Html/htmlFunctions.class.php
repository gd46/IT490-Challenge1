<?php
	
	namespace Classes\Html;

	interface htmlFunctions_Template{
		public static function printVerticaltable($records, $headings);
		public static function printHorizontaltable($records, $headings);
		public static function printTable($records, $headings, $printDirection);
		public static function makeLink($urlVar, $increment,$title);
		public static function printTitle($collegeName);

	}
	class htmlFunctions implements htmlFunctions_Template{
		
		//Function for printing a table by passing in an array, and passing in one url variable. 
		public static function printVerticaltable($records,$headings){
			if(isset($_GET['record'])){
				$table = '<div id="verticalTable"><table border="1">';
				$i = 0;
				foreach($records[$_GET['record']] as $key => $value){
					$table .= '<tr><th>' . $headings[$i]['varTitle'] . '</th>';
					$table .= '<td>' . $value . '</td></tr>';
					$i++;
				}
				$table .= '</table></div>';
				echo $table;
			}
		}

		public static function printHorizontaltable($records, $headings){
			if(isset($_GET['record'])){
				$table = '<table border="1"><tr>';
				$i = 0;
				foreach($records[$_GET['record']] as $record){
					$table .= '<th>' . $headings[$i]['varTitle'] . '</th>';
					$i++;
				}
				$table .= '</tr><tr>';
				foreach($records[$_GET['record']] as $key => $value){
					$table .= '<td>' . $value . '</td>';
				}
				$table .= '</tr></table>';
				echo $table;
			}
		}

		public static function printTable($records, $headings, $printDirection){
			
			if($printDirection == 'vertical'){
				\Classes\Html\htmlFunctions::printVerticaltable($records, $headings);
			}
			else{
				\Classes\Html\htmlFunctions::printHorizontaltable($records,$headings);
			}	
		}

		public static function makeLink($urlVar, $increment,$title){
			echo '<a href="?'.$urlVar.'=' .$increment. '">' . $title . '</a>';
			echo'</p>';
		}

		public static function printTitle($collegeName){
			if(empty($_GET)){
				echo '<h1 id="title">List of Colleges</h1>';
			}
			else{
				echo '<h1 id="title">'. $collegeName . ' Info'. '</h1>';
			}
		}

	}
?>