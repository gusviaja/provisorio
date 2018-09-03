<?php
namespace Usuarios;



class Cadastro extends  \Cadastro{


	public function getNomeUsuario(){

		return $this->nome. "sou um usuario";
	}
}