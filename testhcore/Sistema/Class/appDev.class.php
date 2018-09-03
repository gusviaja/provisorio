<?php

Class appDev{
	
	private $recado;

	function __construct(string $recado){
		$this->recado = $recado;
	}

	function __toString(){
		return "Seu recado e $this->recado";
	}
}