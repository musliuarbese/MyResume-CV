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
        
        <div class="col-lg-8 mt-5 mt-lg-0" style = "margin-left: 300px;">
       
            <h3 style="margin-top: 200px"><?php echo $name ?></h3><br>
            <h4><?php echo $email?> </h4><br>
            <h3><?php echo $subject ?></h3><br>
            <h4><?php echo $message ?></h4><br>
            
              <br><div class="text-center"><button onSubmit="deleteContact.php" type="submit" name="delete" class="butonijem" style="width: 120px !important; margin-left: 300px;  float:left" >Delete Skill</button></div>

</div>
 <?php }
     
  }
  
    
    public function destroy($email)
    {
        $query = $this->db->pdo->prepare('DELETE from contact WHERE email = :email');
        $query->execute(['email' => $email]);
      return header('Location: showContact.php');
    }
}