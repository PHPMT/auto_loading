<?php

namespace Blog\Database;

use Blog\Database\Connection;


class PostRepository
{
  
  function save($title, $text, $author)
  {
    $database = new Connection();
    $db = $database->openConnection();
    $stm = $db->prepare("INSERT INTO 
      post (title, post, author)
      VALUES (:post, :title, :author)
    ") ;
    $query = array(
      ':title' => $title,
      ':post' => $post,
      ':author' => $author
    );

    $post = $stm->execute($query);
    return $post;
  }

  public function getAll()
  {
    try
    {
      $database = new Connection();
      $db = $database->openConnection();
      $sql = "SELECT * FROM post" ;
      $array = [];
      $posts = $db->query($sql);
      return $array;
    }
    catch (PDOException $e)
    {
      echo "Erro ao tentar selecionar lista de posts: " . $e->getMessage();
    }
  }

  public function getById($id)
  {
    try
    {
      $database = new Connection();
      $db = $database->openConnection();
      $sql = "SELECT * FROM post WHERE id=$id" ;
      
      $post = $db->query($sql);
      return $post;
    }
    catch (PDOException $e)
    {
      echo "Erro ao tentar selecionar lista de posts: " . $e->getMessage();
    }
  }

}
