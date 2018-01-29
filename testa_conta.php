<?php

require 'conta.php';

$conta1= conta::criaconta();

$conta2=conta::criaconta();

echo "contador:" . conta::$contador . PHP_EOL;// acesso ao atributo da classe deve chamar o metodo pela classe::$atributo da classe

 ?>
