<?php

require 'conta.php';

$conta1= new conta();

$conta2=new conta();

echo "contador:" . conta::$contador . PHP_EOL;// acesso ao atributo da classe deve chamar o metodo pela classe::$atributo da classe

 ?>
