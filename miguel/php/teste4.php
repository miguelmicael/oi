<?php

	$nome = "Guilherme";
	$nota1 = 8;
	$nota2 = 9;

	$med = ($nota1 + $nota2)/2;

	if($med >= 5){
		echo "Nome: $nome Nota1: $nota1 Nota2: $nota2 Situacao: Aprovado";
	}
	else{
		echo "Nome: $nome Nota1: $nota1 Nota2: $nota2 Situacao: Reprovado";
	}

?>