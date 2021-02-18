<?php 
include('database.php'); 

class contactContainer
{
   protected $db;

    public function __construct()
    {
       $this->db = new database; //po du me bo edit edhe update po e kom ID teknologjine e sedi qfare gabimi po kom
    }

    public function all()
    {
       $query = $this->db->pdo->prepare('SELECT * FROM contact');
       $query->execute();
       $result= $query->fetchAll();
      // print_r($result);
      
      foreach($result as $row)
      {
        $name=$row['name']; 
        $email =$row['email'];
        $subject =$row['subject'];
        $message =$row['message'];
        ?>

        <section>
      
        <!-- <div class="col-lg-8 mt-5 mt-lg-0"> -->
        
<form action="deleteContact.php" method="post" onSubmit="" role="form"  style="width: 200%; margin-top: 50px; margin-left:300px; margin-bottom: 100px">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label class="teksti">User:</label>
                  <input style="width: 600px !important;" type="text" name="name" class="formm-control"  value=<?php echo $name; ?> required>
                 </div> 
                  </div>
                  <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label class="teksti">User Mail:</label>
                  <input style="width: 600px !important;" type="email" class="formm-control" name="email"   value=<?php echo $email ?> required>
                
              </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <label class="teksti">Subject:</label>
                  <input style="width: 600px !important;" type="text" name="subject" class="formm-control"  value=<?php echo $subject; ?> required>
                </div>
      </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label class="teksti">Message:</label>
                 <input style="width: 600px !important;" type="text" class="formm-control" name="message" id="website" value=<?php echo $message ?> required>
                </div>
      </div>
              
              <br>
             
              <button type="submit" name="delete" class="butt" style="width: 200px !important; margin-left:500px ">Delete</button>
              
</form>
</div>
      </section>
 <?php }
     
  }
  
    
    public function destroy($email)
    {
        $query = $this->db->pdo->prepare('DELETE from contact WHERE email = :email');
        $query->execute(['email' => $email]);
      return header('Location: showContact.php');
    }
}