<?php 

require ("autoload.php");

// use Usuarios\Cadastro;
// session_start();
// $_SESSION["dados"] = array("nome"=>"Gustavo","nivel_id"=>"1");
// //------------------------------------------------------------
//---------------UM POUCO DE DATAS------------------------------
//--------------------------------------------------------------

//=====================================================//
//====== DTA COM CLASE DATETIME ======================//
//===================================================//
// $dt = new DateTime();
// $sla = "2";
// $sla = "P".$sla."D";

// $periodo = new DateInterval($sla);
// echo $dt->format("d/m/Y H:i:s");
// echo "<br>";
// $dt->add($periodo);
// echo $dt->format("d/m/Y H:i:s");
// 
// 
// 
//=====================================================//
//====== DTA COM A FUNCAO DATE ======================//
//===================================================//
// $t= time();// SEGUNDOS DESDE JANEIRO DO `70 (TIMESTAMPS
// echo $t."<br>"; // SEGUNDOS DESDE JANEIRO DO `70 (TIMESTAMPS)
// //------------------------------------------------------------
// echo date('d/m/Y H:i:s')."<br>"; // DATA E HORA DO SISTEMA FORMATADAS
// echo date('d/m/Y H:i:s',$t)."<br>"; // DATA E HORA QUE PASAMOS NO PARAMETRO T
// //------------------------------------------------------------

// $totime = strtotime('2018-08-01 14:36:52'); // CONVERTE UM STRING EM TIMESTAMPS(RESPEITAR A FORMATACAO);
// echo $totime."<br>";
// echo date('d/m/Y H:i:s',$totime)."<br>";// DATA E HORA QUE PASAMOS NO PARAMETRO TTOTIMES
//-------------------------------------------------------------------
////-----------SET LOCALE PARA EPUXAR DATA E ECHO EM PORTUGUES------
/////----------------------------------------------------------------
setlocale (LC_ALL, 'pt_BR','pt_BR.utf-8','portuguese'); // Aplicar SETO LOCALE EM TUDO QUE ESTIVER ABAIXO SEJA LINUX, MAC OU WDS, PARA COMPLEMENTAR USAR A FUNCAO strfcdate() com os parametros conforme tabela.
// echo "<span class='breadcrumb'>".ucfirst(strftime("%A feira, %d de %B de %Y")).'</span>'
;
//====================================================================
//-'''''''''''EXHIBIR ERROS '''''''===================================
////===========================INCLUIR NO ARQUIVO DE BOOT DO SISTEMA==



// $cep = "05880240";
// $link = "https://viacep.com.br/ws/$cep/json/";



// try {
//   $ch = curl_init($link);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//   $response = curl_exec($ch);
//   curl_close($ch);

//   $data = json_decode($response,true);
//   print_r($data);
// } catch (Exception $e) {
//   $e->show_message();
  
// }



  
  // echo $varNaoExiste; 
  // 
  // 
//====================================================================
//-'''''''''''CAPTURAR E TRATAR ERROS '''''''=========================
////==================================================================
// try{ 

//   throw new Exception("Error Processing Request", 400);

// }catch(Exception $e){
//   echo json_encode(array(

//   "message"=>$e->getMessage(),
//   "line"=>$e->getLine(),
//   "file"=>$e->getFile(),
//   "code"=>$e->getCode()

// ));
// }
// finally{
//   echo "executar tarefas por exemplo reportar o erro ao arquivo de erros e enviar email ao adm";
// }


//------------------------------------------------------------












?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Teste HCODE</title>
  </head>
  <body>
   
      <main class="container">
        <span class="breadcrumb"><h1 class="text-center">Teste HCODE</h1></span>

    <?php 
//=======================================================//
//========TRABALHO COM ARQUIVOS==========================//
//======================================================//

$data = new DateTime();
$file = fopen("log.txt", "a+");
$user = $_SERVER["HTTP_USER_AGENT"];
echo($user);
fwrite($file,"Data: ".$data->format("d/m/Y H:i:s")."\r\n"."Browser: ".$user );
fclose($file);

//=======================================================//
//========TRABALHO COM PASTAS ===========================//
//======================================================//
    // $dir = "uploads";    
    // if(!is_dir($dir)):
    //   mkdir($dir,0755);
    // else:
    //   // rmdir($dir);
    //   $conteudo = scandir($dir);
    //    $data = array();

    //   foreach ($conteudo as $c):
    //      if(!in_array("$c", array(".",".."))):
    //       // echo "<pre>";
          
         
    //       $filePath = $dir.DIRECTORY_SEPARATOR.$c;
         
    //       $info = pathinfo($filePath);
    //       $info['size'] = filesize($filePath);
    //       $info['modified'] = date("d-m-Y h:i:s",filemtime($filePath)) ;
    //       array_push($data, $info);

    //       $jsonData = json_encode($data);
    //       echo $jsonData;
    //       // if(pathinfo($filePath)['extension'] === "pdf"):
    //       //   echo "o arquivo de nome ".pathinfo($filePath)['basename'] ."e do tipo ". pathinfo($filePath)['extension'];
    //       // endif;  
    //       // var_dump(pathinfo($filePath));
    //       // echo "</pre>"; 
    //     endif; 
    //   endforeach;
     
       
      // for ($i=0; $i < count($conteudo); $i++):
      //   if( $conteudo[$i] != "." && $conteudo[$i] != ".."):
      //     echo "<pre>";
      //     echo $conteudo[$i];
      //     echo "</pre>"; 
      //    endif;
        

      //  endfor; 

      
   // endif;   
       

    // $nome = "Joao ";
    // $end = "rua Arnaldo Gama";

    //  $c = new Cadastro($nome, $end);
    //  echo $c;
    //  echo $c->getNomeUsuario();
    // echo $c;
    // echo "<br/>";
    // echo "<br/>";
    // echo $c::conecta();
    // echo "<br/>";
    // echo "<br/>";
    // $recado = "Sou um recado vindo de um autoload de uma clase do Dev";
    // $claseDoDev = new appDev($recado);
    // echo $claseDoDev;
    ?>
         <!-- <form action='valida.php' method="GET" > -->
         <form action='valida.php' method="POST" > 

              <div class="form-group">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" name="nome" id="inputNome" aria-describedby="emailHelp" placeholder="Seu nome aqui">
                <small id="emailHelp" maxlength=40 class="form-text text-muted">Maximo 40 caracteres</small>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"> Seu email aqui, util este small.</small>
              </div>
             
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" name="manter" for="exampleCheck1">Manter conectado</label>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
          
      </main>  
    <!-- Optional JavaScript
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

