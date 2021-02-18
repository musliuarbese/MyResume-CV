<?php

require 'skillsContainer.php';



 $skills = new skillsContainer; 

if(isset($_POST))
{
    $skills->store($_POST);
}

?>