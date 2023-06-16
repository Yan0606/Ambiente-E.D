<?php

$servidor ="localhost";
$usuario ="root";
$senha ="";
$bancodedados="formulario";

$conexao= mysqli_connect($servidor, $usuario, $senha, $bancodedados);
if (!$conexao){
    die("Houve um erro:".mysqli_connect_error());
}


?>