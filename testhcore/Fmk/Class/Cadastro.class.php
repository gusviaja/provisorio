<?php
/**
 * Clase generica para cadastros de qualquer coisa
 * ****O intuito e abstrair propriedades e metodos para clases filhas
 */

Class Cadastro {
	
	protected $nome;
	private $end;
	private static $conn = "conexao var static";

		function __construct(string $nome, string $end){

			$this->nome = $nome;
			$this->end = $end;
			

		}

		function __toString(){
			
			return "O nome e {$this->nome} e o endereco e {$this->end} sou apenas um recado vindo do autoload de uma clase do pr'oprio framework";


		}

		
		private static function getEstatica(){
			return "retorno de uma clase estatica";

		}

		public static function conecta(){
			
			return self::$conn;

		}



}