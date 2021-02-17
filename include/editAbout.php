<?php

 require 'aboutContainer.php';



 $about = new boutContainer; 

 if(isset($_POST['edit']))
 {
  $sabout->update($_POST['email'], $_POST);
 }else if(isset($_POST['delete']))
 {
    $about->destroy($_POST['email']); 
 }
?>
