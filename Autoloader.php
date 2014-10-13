<?php



	class Autoloader{
		public static function loader($className){
			$className = ltrim($className, '\\');
			$fileName = '';
			$namespace = '';
			if($lastNsPos = strrpos($className, '\\')){
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespcace) . DIRECTORY_SEPARATOR;
		}
		//$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
		$fileName .= $className . '.php';
		require $fileName;
		}
	}
?>