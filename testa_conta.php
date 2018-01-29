<?php

require 'conta.php';

echo "contador:" . conta::$contador . PHP_EOL;// acesso ao atributo da classe deve chamar o metodo pela classe::$atributo da classe

$conta1= conta::criaconta();
$conta1->numero=12542;
echo "contador:" . conta::$contador . PHP_EOL;
echo "Conta:$conta1->numero" . PHP_EOL;

$conta2=conta::criaconta();
$conta2->numero=12544;
echo "contador:" . conta::$contador . PHP_EOL;// acesso ao atributo da classe deve chamar o metodo pela classe::$atributo da classe
echo "Conta:$conta2->numero" . PHP_EOL;

 conta::zeracontador();


 ?>
