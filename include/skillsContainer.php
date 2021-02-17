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
                  <input type="text" name="teknologjia" class="form-control" id="teknologjia" placeholder="Your Technology" value=<?php echo $teknologjia; ?> required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="perqindja" id="perqindja" placeholder="Your Percentagge" value=<?php echo $perqindja ?> required>
                </div>
              </div>
              <br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" name="edit" class="butonijem" style="width: 200px !important; margin-right: 40px; float:left">Update Skill</button></div>
              <div class="text-center"><button type="submit" name="delete" class="butonijem" style="width: 200px !important; float:left">Delete Skill</button></div>

</form>
</div>
 <?php }
     
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