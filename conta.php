<?php


class conta
{
  public $numero;//atriubto do objeto
  public $saldo;//atributo do objeto
  public static $contador=0; //atributo da classe


  function __construct()
  {
   self::$contador++;
  }
}




 ?>
