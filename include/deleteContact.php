<?php

 require 'contactContainer.php';



 $contact = new contactContainer; 

 if(isset($_POST['delete']))
 {
    $contact->destroy($_POST['email']); 
 }
?>
