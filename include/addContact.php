<?php 
include('db_con.php'); ?>
<?php
        if(!empty($_POST['name']))
        {
              if(!empty($_POST['email']))
              {
                 if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                 {
                   
                             if(!empty($_POST['subject']))
                             {
                                if(!empty($_POST['message']))
                                {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $subject = $_POST['subject'];
                                    $message = $_POST['message'];
                                    
                                    $sql = "INSERT INTO contact (name, email, subject, message) 
                                    VALUES ('$name', '$email', '$subject', '$message')";
                                    $query=mysqli_query($conn, $sql);
                                    
                                    
                                                 if($query)
                                                           {
                                                               echo '<script type="text/javascript">window.alert("You succesfully regristred a contact!")</script>';
                                                               header( "refresh:0; url=../index.php" );
                                                            }else{
                                                                echo '<script type="text/javascript">window.alert("You did not regristed any contact!")</script>';
                                                                header( "refresh:0; url=../index.php" );
                                                          }
                  
                                     }else{
                                         echo '<script type="text/javascript">window.alert("You did NOT succesfully posted! ENTER THE MESSAGE")</script>';
                                         header( "refresh:0; url=index.php" );
                                     }
                                 }else{
                                     echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE SUBJECT")</script>';
                                     header( "refresh:0; url=index.php" );
                             }
                          
                 }else{
                    echo '<script type="text/javascript">window.alert("INVALID EMAIL FORMAT Valid format: example@domain.com")</script>';
                    header( "refresh:0; url=index.php" );
                 }
              }else{
                echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE EMAIL")</script>';
                header( "refresh:0; url=index.php" );
              }
           
        }else{
          echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE NAME")</script>';
         header( "refresh:0; url=index.php" );
        }
      
     
        //Marrja e te dhenave nga kontakt forma
		
		?>