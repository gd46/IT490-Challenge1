<?php
	
	namespace Classes\Html;
	
	class printLinks {
		
		//Function gets called when a new printLinks object is created. 
		//This function prints links based of of the array it is passed. 
		//Calls the printTable function to print the data for the record clicked. 
		public function __construct($records, $headings){
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					\Classes\Html\htmlFunctions::makeLink('record',$i, $record['INSTNM']);
				}
			}
		}
	}
?>