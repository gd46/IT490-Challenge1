<?php
ini_set('auto_detect_line_endings', TRUE);

require 'uploadFile.php';
require 'fileHandling.php';
require 'printLinks.php';

$csv = 'hd2013.csv';
$file = uploadFile::fileUpload($csv);

$handle = new fileHandling();
$records = $handle->checkColumnheadings($file, TRUE);

new printLinks($records);

?>