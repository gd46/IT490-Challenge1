<?php
	
	require 'Html_functions.php';
	
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
				
			Html_functions::printTable($records, 'record');
		}
?>