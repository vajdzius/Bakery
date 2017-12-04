<?php

class Bun
{
  /*const OWNER = 'Bakery Inc.';
  public static $OWNER_TWO = 'UAB Kepykla';
  private $a = 'A';
  protected $b = 'B';
  public $c = 'C';
  */

  public function __construct (string $key)
  {
  	 echo 'Hello' . $key . "\r\n";
  }
}

//Bun:: $OWNER_TWO = Bun::OWNER;

//print_r(Bun::OWNER);
//print_r(Bun::$OWNER_TWO);

$bun = new Bun('a');
$bun = new Bun('b');
$bun = new Bun('c');
$bun = new Bun('d');
//$bun->C = 'B';

//print_r($bun);
//print_r($bun->c);