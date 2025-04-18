<?php

namespace Blog\Models;

class PostModel
{
  private $title;
  private $text;
  private $author;  

  function __construct($title, $text, $author)
  {
    $this->title = $title;
    $this->text = $text;
    $this->author = $author;
  }

  public function getText()
  {
    return $this->text;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
