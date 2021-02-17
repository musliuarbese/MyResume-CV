<?php 
include('db_con.php'); ?>
<?php
        if(!empty($_POST['teknologjia']))
        {
              if(!empty($_POST['perqindja']))
              {
                                    $teknologjia = $_POST['teknologjia'];
                                    $perqindja = $_POST['perqindja'];
                                    
                                    
                                    $sql = "INSERT INTO skills (teknologjia, perqindja) 
                                    VALUES ('$teknologjia', '$perqindja')";
                                    $query=mysqli_query($conn, $sql);
                                    
                                    
                                                 if($query)
                                                           {
                                                               echo '<script type="text/javascript">window.alert("You succesfully post your skills!")</script>';
                                                               header( "refresh:0; url=../index.php" );
                                                            }else{
                                                                echo '<script type="text/javascript">window.alert("You did not post your skills succesully!")</script>';
                                                                header( "refresh:0; url=../index.php" );
                                                          }
                  
                                     }else{
                                         echo '<script type="text/javascript">window.alert("You did NOT succesfully posted! ENTER PERQINDJA")</script>';
                                         header( "refresh:0; url=index.php" );
                                     }
                                 }else{
                                     echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE TEKNOLOGJIA")</script>';
                                     header( "refresh:0; url=index.php" );
                             }
                          
                
      
     
		
		?>