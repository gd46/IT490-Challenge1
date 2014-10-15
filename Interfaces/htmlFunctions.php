<?php

namespace Interfaces;

interface htmlFunctions{
		public static function printVerticaltable($records, $headings);
		public static function printHorizontaltable($records, $headings);
		public static function printTable($records, $headings, $printDirection);
		public static function makeLink($urlVar, $increment,$title);
		public static function printTitle($collegeName);

	}
?>

