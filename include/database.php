<?php

class database
{
   public $pdo;

 public function __construct()
 {
    try
    {
        session_start();
        $link = new PDO('mysql:host=localhost;dbname=resume', 'root', '');
        $this->pdo = $link;
        
    }catch(PDOException $e)
    {
        die("DIE". $e->getMessage());

    }

 }

}

?>