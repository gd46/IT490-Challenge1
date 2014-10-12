<?php
//Fixes issues with csv files not being separated properly.
ini_set('auto_detect_line_endings', TRUE);

//Gives access to functions in other files. 
require 'manageFile.php';
require 'fileHandling.php';
require 'printLinks.php';
require 'Html_functions.php';

//Stores the csv file in a variable and passes it to fileUpload to open the file for reading. 
$csv = 'hd2013.csv';
$file = manageFile::fileUpload($csv);

//Creates a new fileHandling object passes the file in and stores the data into an array.
$handle = new fileHandling();
$records = $handle->checkColumnheadings($file, TRUE);

//Prints the array out in links, click a link to display the data for that record in the form of a table. 
new printLinks($records);

?>