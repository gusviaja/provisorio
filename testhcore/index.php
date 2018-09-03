<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="terceiros/css/bootstrap.min.css">

    <title>Teste HCODE</title>
  </head>
  <body>
   
      <main class="container">
        <span class="breadcrumb"><h1 class="text-center">Teste HCODE</h1></span>
<form method="POST" enctype="multipart/form-data" > 
              <div class="form-group">
                <input type="file" name="fileupload" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" name="nome" id="inputNome" aria-describedby="emailHelp" placeholder="Seu nome aqui">
                <small id="emailHelp" maxlength=40 class="form-text text-muted">Maximo 40 caracteres</small>
              </div>

              <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"> Seu email aqui, util este small.</small>
              </div>
             
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" name="manter" for="exampleCheck1">Manter conectado</label>
              </div>
              <button type="submit" class="btn btn-primary" id="submit">Enviar</button>
          </form>
          
      </main>  
    <!-- Optional JavaScript
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="terceiros/js/bootstrap.min.js"></script>
    <!-- <script src="js/main.js"></script> -->

  </body>
</html>


<?php

//==========================================//
//=======MOVER E RENOMEAR DE ARQUIVOS ======//
////========================================//

$nomearquivo = "readme.txt";
$novonome = "leame.txt";
$path1 = "docs";

$path2 = "documentos";

//==********RENOMEA E MUDA PASTA*****/////////
// rename(

// $path1.DIRECTORY_SEPARATOR.$nomearquivo, //origem
// $path2.DIRECTORY_SEPARATOR.$novonome////destino

// );
//==********RENOMEA SEM MUDAR A PASTA*****/////////
// rename(
// $path2.DIRECTORY_SEPARATOR.$novonome, //origem
// $path2.DIRECTORY_SEPARATOR.$nomearquivo////destino
// );
// //==********MUDAR A PASTA MANTENDO NOME DO ARQUIVO*****////
// rename(
// $path2.DIRECTORY_SEPARATOR.$nomearquivo, //origem
// $path1.DIRECTORY_SEPARATOR.$nomearquivo////destino
// );


//==========================================//
//=======download DE ARQUIVOS ================//
////=======clona de uma url, cria arquivo local, cola conteudo clonado===========================//
// $link = "http://nisistemas.com.br/dist/img/logo-nisistemas.png";
// $content = file_get_contents($link);
// $parse = parse_url($link);
// // var_dump($parse['path']);
// $basename = basename($parse['path']);
// $file = fopen($basename, "w+");
// fwrite($file, $content);
// fclose($file);




///
//==========================================//
//=======UPLOAD DE ARQUIVOS ================//
////========================================//
///
// if( $_SERVER["REQUEST_METHOD"] === "POST"):
 
//     $files = $_FILES["fileupload"];
//     // var_dump($files);
//     if($files['error']):
//       throw new Exception("ALGUMA MENSAGEM DE ERRO: ".$file['error'], 1);  
//     endif;  

//     $diruploads = 'diruploads';

//     if(!is_dir($diruploads)):
//       mkdir($diruploads);
//     endif;  
//     $ver = $diruploads.DIRECTORY_SEPARATOR.$files['name'];
//     // echo $ver;die();
    
//     if(move_uploaded_file( $files['tmp_name'], $diruploads.DIRECTORY_SEPARATOR.$files['name'])):
//       echo "Upload com sucesso!";
//     else:
//       throw new Exception("Error durante o Upload", 1);

//     endif;  

    



//   endif;  
