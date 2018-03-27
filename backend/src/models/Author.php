<?php

namespace Models;

class Author
{
  private $name;

  function __construct($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}