<?php
	
	class printLinks {
		
		public function __construct($records){
			
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					echo '<a href="?record=' .$i. '">' . $record['INSTNM'] . '</a>';
					echo'</p>';
				}
			}
				
			if(isset($_GET['record'])){
				echo '<table border="1">';
				foreach($records[$_GET['record']] as $key => $value){
					echo '<tr><th>' . $key . '</th>';
					echo '<td>' . $value . '</td></tr>';
				}
				echo '</table>';
		}
?>