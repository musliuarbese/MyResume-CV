<?php 
include('database.php'); 

class skillsContainer
{
   protected $db;

    public function __construct()
    {
       $this->db = new database; //po du me bo edit edhe update po e kom ID teknologjine e sedi qfare gabimi po kom
    }

    public function all()
    {
       $query = $this->db->pdo->prepare('SELECT * FROM skills');
       $query->execute();
       $result= $query->fetchAll();
      // print_r($result);
      
      foreach($result as $row)
      {
        $teknologjia=$row['teknologjia']; 
        $perqindja =$row['perqindja'];
        ?>

       
      
        <div class="col-lg-8 mt-5 mt-lg-0">
<form action="editSkills.php" method="post" onSubmit="" role="form"  style="margin-top: 200px; margin-left: 480px; margin-bottom: 100px">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="teknologjia" class="formm-control" id="teknologjia" placeholder="Your Technology" value=<?php echo $teknologjia; ?> required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="formm-control" name="perqindja" id="perqindja" placeholder="Your Percentagge" value=<?php echo $perqindja ?> required>
                </div>
              </div>
              <br>
              
              <button type="submit" name="edit" class="butt" style="width: 100px !important; margin-left:50px; margin-right:50px ">Update</button>
              <button type="submit" name="delete" class="butt" style="width: 100px !important; ">Delete</button>

</form>
</div>
 <?php }
     
  }
  public function store($request)
    {
      if(!empty($_POST['teknologjia']))
      {
        if(!empty($_POST['perqindja']))
        {
          
                        $query = $this->db->pdo->prepare('INSERT INTO skills(teknologjia, perqindja)
                        VALUES (:teknologjia, :perqindja)');
                        $query->bindParam(':teknologjia', $request['teknologjia']);
                        $query->bindParam(':perqindja', $request['perqindja']);
                        if($query->execute())
							          {
								          echo '<script type="text/javascript">window.alert("You succesfully post a Post!")</script>';
								          header( "refresh:0; url=addSkills.php" );
							          }else{
								          echo '<script type="text/javascript">window.alert("You did not post any POST!")</script>';
								          header( "refresh:0; url=addSkills.php" );
					            	}
				
					}else{
						echo '<script type="text/javascript">window.alert("You did NOT succesfully posted! ENTER PERQINDJA")</script>';
						header( "refresh:0; url=addSkills.php" );
					}
				}else{
					echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER TEKNOLOGJIA")</script>';
					header( "refresh:0; url=addSkills.php" );
        }
      
  }
  
    public function update($teknologjia, $request)
    {
        $query = $this->db->pdo->prepare('UPDATE skills SET teknologjia = :teknologjia, perqindja = :perqindja WHERE teknologjia = :teknologjia');
        $query->execute([
            'teknologjia' => $request['teknologjia'],
            'perqindja' => $request['perqindja'],
            
        ]);
        return header('Location: showSkills.php');
    }
    public function destroy($teknologjia)
    {
        $query = $this->db->pdo->prepare('DELETE from skills WHERE teknologjia = :teknologjia');
        $query->execute(['teknologjia' => $teknologjia]);
      return header('Location: showSkills.php');
    }
}