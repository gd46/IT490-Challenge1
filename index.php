<?php
	//Fixes issues with csv files not being separated properly.
	ini_set('auto_detect_line_endings', TRUE);

	//Gives access to functions in other files. 
	require 'manageFile.php';
	require 'fileHandling.php';
	require 'printLinks.php';
	require 'Html_functions.php';
?>

	<head>
		<link rel ="stylesheet" type="text/css" href="style.css">
	</head>
<?php
	//Stores the csv file in a variable and passes it to fileUpload to open the file for reading. 
	$csv = 'hd2013.csv';
	$csv2 = 'hd2013_varlist.csv';

	$file = manageFile::uploadFile($csv);
	$file2 = manageFile::uploadFile($csv2);

	//Creates a new fileHandling object passes the file in and stores the data into an array.
	$handle = new fileHandling();
	$handle2 = new fileHandling();

	$records = $handle->checkColumnheadings($file, TRUE);
	$headings = $handle->checkColumnheadings($file2, TRUE);

	$collegeName = '';
	if(isset($_GET['record'])){
		$collegeName = $records[$_GET['record']]['INSTNM'];
	}
?>

<html>
	<?php if(isset($_GET['record'])){ ?>
		<title><?php echo $collegeName ?></title>
	<?php }
		else{ ?>
			<title>College List</title>
		<?php } ?>
	<?php Html_functions::printTitle($collegeName);?>
	<div class = 'center'><?php new PrintLinks($records, $headings); ?></div>
	<?php if(isset($_GET['record'])){ ?>
		<a href="index.php">Go Back</a>
	<?php } ?>
	<?php Html_functions::printTable($records, $headings, 'vertical'); ?>
</html>