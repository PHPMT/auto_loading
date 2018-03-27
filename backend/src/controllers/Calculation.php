<?php
namespace Controllers;

class Calculation
{
  public function sum($a, $b)
  {
    return $a + $b;
  }

  public function sub($a, $b)
  {
    return $a - $b;
  }

  public function mult($a, $b)
  {
    return $a * $b;
  }
}
