<?php


class conta
{
  public $numero;//atriubto do objeto
  public $saldo;//atributo do objeto
  public static $contador=0; //atributo da classe


  private function __construct() // metodo privado 
  {
   self::$contador++;
  }

  static function criaconta(){// metodo da classe e não do objeto uso do static
    return new conta();
  }
}




 ?>
