<?php

// if ( isset($_POST[nome]) && isset($_POST[email]) ):
		

// 		$nome = htmlentities(trim($_POST[nome]));
// 		$email = htmlentities(trim($_POST[email]));

		
// endif;	

//========================================================//
////==========UPLOAD DE ARQUIVOS===========================//
///=========================================================//




// function lendoArquivos_com_fgetcontents($filename){

// 	======= PARA TESTE PRATICO SETEI MANUALMENTE ===
// 	// $filename = "uploads".DIRECTORY_SEPARATOR."apirlo.jpg";
// 	========================================================
// 	
// 	$base64 = base64_encode(file_get_contents($filename));
// 	$fileinfo = new finfo(FILEINFO_MIME_TYPE);

// 	$mimetype = $fileinfo->file($filename);

// 	$base64encode = "data:".$mimetype.";base64,".$base64;

// 	return $base64encode;
// }

//====================================================//
////==========CRIACAO E APAGANDO ARQUIVOS============//
///=========================================================//


// function cria_e_apaga_arquivos(string $nomearquivo){
// 	// $nomearquivo = "usuarios.txt";
	
// 		$file = fopen($nomearquivo, "w+");
		
// 		fwrite($file, "Usuario: ".$nome."\r\n"."Email: ".$email);
// 		fclose($file);
// 		if( file_exists($nomearquivo) ):
// 			unlink("usuarios.txt");
// 		endif; 
// }

//===========================================================//
////==========LENDO E APAGANDO ARQUIVOS DENTRO DE UMA PASTA==//
///=========================================================//

	//  function lendo_e_apagando_arquivos_em_pasta($pathPasta){
	// 	if( is_dir($pathPasta) ):
	// 		foreach ( scandir($pathPasta) as $arquivo):

	// 			if (!in_array($arquivo, array(".",".."))):
	// 				echo "apagando arquivo $arquivo <br/>";
	// 				echo "<br/>";
	// 				unlink($pathPasta.DIRECTORY_SEPARATOR.$arquivo);
	// 			endif;
	// 		endforeach;
	// 	endif;	
	// }

//====================================================//
////==========CRIACAO DE TRIGER PARA BACKUP USU DELETADO==//
///=========================================================//
///
//DROP TRIGGER tr_respaldo_ad;
// CREATE TRIGGER tr_respaldo_ad AFTER DELETE ON usuarios FOR EACH ROW INSERT INTO 
// respaldo (idusuariodel) VALUES (OLD.idusuario);
// DELETE FROM usuarios WHERE idusuario = 2;


 // EXEMPLO DE IF E SWITCH COM $_POST
// if (isset($_POST[nome])):
// 	$nome = htmlspecialchars(trim($_POST[nome]));
	
// 	// echo $nome;
// 	// 	switch ($nome) {
// 	// 		case 'gustavo':
// 	// 			echo "${nome} es um trolon";
// 	// 			break;
			
// 	// 		default:
// 	// 			echo "nada";
// 	// 			break;
// 	// 	}

// 	// foreach ($_POST as $dado => $value) {
// 	// echo $dado."<br>";

// 	// }



// endif;
// 
// 
// 
// EXEMPLO DE IF COM $_GET TAMBEM PODIA SER USADA QQ FUNCAO DE ARRAY PARA PEGAR O VALOR,  VER ABAIXO

// if (isset($_GET[nome])):
// 	echo $_GET["nome"];


// endif;
// var_dump($_GET);
// if(isset($_GET)):

// 	if (in_array("gustavo",$_GET)):
// 		echo 'enviaram o parametro '. $_GET["nome"];
// 	endif;	
// endif;	
// 
// // CONHECENDO TODOS OS VALORES DA SUPER GLOBAL $_SERVER 

//  echo "<pre>";
 
// foreach ($_SERVER as $key => $value):

	
// 	echo "<strong> Parametro: </strong> {$key} <strong> - Valor: </strong>{$value} ";
// 	echo "<br>";
	
// endforeach;

// echo  "</pre>";
// 
// FUNCOES NATIVAS PARA STRING
// $nome = Gustavo;
// echo strtoupper($nome). " tudo em caixa alta<br>";
// echo strtolower($nome). " tudo em caixa baixa <br>";
// echo ucfirst($nome). " primeira letra do parrafo em caixa alta<br>";
// echo ucwords($nome). " <br>";
// $nova = str_replace("o", "a", $nome); 
// echo $nova . " substituindo caracter com str_replace<br>";
// $dominio =  $_SERVER["HTTP_HOST"];
// var_dump($dominio);
// $cname = strpos($dominio, "test") ;
// $site = substr($dominio, 4);
// var_dump($site);
// $quant = strlen($dominio);
// $site = substr($dominio, $quant - 4);
// var_dump($site);
// 
// TRABALHANDO COM SESSOES
// 
// session_start(); TEM QUE TER EM TODAS AS PAGINAS, OU HABILITA O AUTOSTART NO SERVER OU NO CONFIG INICIAL DO SISTEMA, NO HEADER ETC
// TRABALHO COM SESSOES
 // session_start();
 // if (isset($_SESSION["dados"])):
 // 		echo session_id('drkbd3g49rkolr073ms2bvl9s4')."<br>";
 // 		echo $_SESSION["dados"]["nome"]."<br>";
 // 		echo $_SESSION["dados"]["nivel_id"]."<br>";
 // 		echo session_save_path()."<br>";
 // 		echo session_id('drkbd3g49rkolr073ms2bvl9s4')."<br>";
 // 		// session_regenerate_id();
 // 		// echo session_id()."<br>";
 // endif;	

?>