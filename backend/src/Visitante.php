<?php

namespace Blog;

use Blog\Database\Connection;

class Visitante
{
  public function comentar($comentario)
  {
    $conn = new Connection();
    $db = $conn->openConnection();
    $stm = $db->prepare("INSERT INTO post (title, post, author)
                          VALUES (:post, :title, :author)") ;
    $query = array(
        ':title' => "comentario",
        ':post' => $comentario,
        ':author' => "comentario"
    );

    $stm->execute($query);
    return $comentario;
  }
}
