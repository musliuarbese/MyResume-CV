<?php 
include('db_con.php'); ?>
<?php
        if(!empty($_POST['title']))
        {
              if(!empty($_POST['birthday']))
              {
                   
                             if(!empty($_POST['website']))
                             {
                                if(!empty($_POST['phone']))
                                {
                                    if(!empty($_POST['city']))
                                {
                                    if(!empty($_POST['age']))
              {
                if(!empty($_POST['degree']))
                {
                    if(!empty($_POST['email']))
              {
                                    $title = $_POST['title'];
                                    $birthday = $_POST['birthday'];
                                    $website = $_POST['website'];
                                    $phone = $_POST['phone'];
                                    $city = $_POST['city'];
                                    $age = $_POST['age'];
                                    $degree = $_POST['degree'];
                                    $email = $_POST['email'];
                                    
                                    $sql = "INSERT INTO about (title,
                                    birthday,
                                    website,
                                    phone,
                                    city,
                                    age,
                                    degree,
                                    email,) 
                                    VALUES ('$title', '$birthday', '$website',
                                    '$phone',
                                    '$city',
                                    '$age',
                                    '$degree',
                                    '$email',)";
                                    $query=mysqli_query($conn, $sql);
                                    
                                    
                                                 if($query)
                                                           {
                                                               echo '<script type="text/javascript">window.alert("You succesfully posted ur data!")</script>';
                                                               header( "refresh:0; url=../index.php" );
                                                            }else{
                                                                echo '<script type="text/javascript">window.alert("You did not posted any data!")</script>';
                                                                header( "refresh:0; url=../index.php" );
                                                          }
                  
                                     }else{
                                         echo '<script type="text/javascript">window.alert("You did NOT succesfully posted! ENTER THE EMAIL")</script>';
                                         header( "refresh:0; url=index.php" );
                                     }
                                 }else{
                                     echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE DEGREE")</script>';
                                     header( "refresh:0; url=index.php" );
                             }
                          
                 }else{
                    echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE AGE")</script>';
                    header( "refresh:0; url=index.php" );
                 }
              }else{
                echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE CITY")</script>';
                header( "refresh:0; url=index.php" );
              }
           
        }else{
          echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE PHONE")</script>';
         header( "refresh:0; url=index.php" );
        }
    }else{
        echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE WEBSITE")</script>';
       header( "refresh:0; url=index.php" );
      }
    }else{
        echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE BIRTHDAY")</script>';
       header( "refresh:0; url=index.php" );
      }
    }else{
        echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE TITLE")</script>';
       header( "refresh:0; url=index.php" );
      }
      
     
        //Marrja e te dhenave nga kontakt forma
		
		?>