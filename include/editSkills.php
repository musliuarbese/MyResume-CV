<?php

 require 'skillsContainer.php';



 $skills = new skillsContainer; 

 if(isset($_POST['edit']))
 {
  $skills->update($_POST['teknologjia'], $_POST);
 }else if(isset($_POST['delete']))
 {
    $skills->destroy($_POST['teknologjia']); 
 }
?>
