<?php
//=======================================================//
//*******************EXIBIR ERROS **********************//
//=======================================================//



/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

//=======================================================//
//*******************AUTOLOAD DE CLASES ****************//
//=======================================================//

define('sistemClass','Fmk/Class');
// define('appClass','Sistema/Class');


function autoload_clases_sistema($class) {
	// var_dump($class);
	
	if($pos = strrpos($class, "\\") ):
		// var_dump($pos);
	$class = str_replace("\\", "/", $class);	
	endif;	
	
	// var_dump($class);
	// die();
    $filename = sistemClass. DIRECTORY_SEPARATOR.$class .".class.php";
    // var_dump($filename);
    if (file_exists($filename)):
    	include_once($filename);
    endif;	
}

// function autoload_clases_app($class) {
//      $filename = appClass. DIRECTORY_SEPARATOR.$class .".class.php";
//     if (file_exists($filename)):
//     	include_once($filename);
//     endif;	
   
// }

spl_autoload_register("autoload_clases_sistema");
// spl_autoload_register("autoload_clases_app");

