<?php

 require 'aboutContainer.php';



 $about = new aboutContainer; 

 if(isset($_POST['edit']))
 {
  $about->update($_POST['email'], $_POST);
 }else if(isset($_POST['delete']))
 {
    $about->destroy($_POST['email']); 
 }
?>
