<?php
	//Fixes issues with csv files not being separated properly.
	ini_set('auto_detect_line_endings', TRUE);

	//Gives access to functions in other files. 
	require 'Autoloader.php';
	spl_autoload_register('Autoloader::loader');
?>

	<head>
		<link rel ="stylesheet" type="text/css" href="CSS/style.css">
	</head>
<?php
	//Stores the csv file in a variable and passes it to fileUpload to open the file for reading. 
	$csv = 'CSV_Files/hd2013.csv';
	$csv2 = 'CSV_Files/hd2013_varlist.csv';

	$file = \Classes\File\manageFile::uploadFile($csv);
	$file2 = \Classes\File\manageFile::uploadFile($csv2);

	//Creates a new fileHandling object passes the file in and stores the data into an array.
	$handle = new \Classes\File\fileHandling();
	$handle2 = new \Classes\File\fileHandling();

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
	<?php \Classes\Html\htmlFunctions::printTitle($collegeName);?>
	<div class = 'center'><?php new \Classes\Html\printLinks($records, $headings); ?></div>
	<?php if(isset($_GET['record'])){ ?>
		<a href="index.php">Go Back</a>
	<?php } ?>
	<?php \Classes\Html\htmlFunctions::printTable($records, $headings, 'vertical'); ?>
</html>