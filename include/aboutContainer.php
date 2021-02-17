<?php 
include('database.php'); 

class aboutContainer
{
   protected $db;

    public function __construct()
    {
       $this->db = new database; //po du me bo edit edhe update po e kom ID teknologjine e sedi qfare gabimi po kom
    }

    public function all()
    {
       $query = $this->db->pdo->prepare('SELECT * FROM about');
       $query->execute();
       $result= $query->fetchAll();
      // print_r($result);
      
      foreach($result as $row)
      {
        $aboutMe=$row['aboutMe']; 
        $title =$row['title'];
        $birthday =$row['birthday'];
        $website =$row['website'];
        $phone = $row['phone'];
        $city =$row['city'];
        $age =$row['age'];
        $degree =$row['degree'];
        $email =$row['email'];
        $description =$row['description'];
        ?>
        
        <div class="col-lg-8 mt-5 mt-lg-0">
<form action="editAbout.php" method="post" onSubmit="" role="form"  style="width: 200%; margin-top: 100px; margin-left:100px; margin-bottom: 100px">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="aboutMe" class="form-control" id="aboutMe" value=<?php echo $aboutMe; ?> required>
                  <br></div> 
                  </div>
                  <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="title" id="title"  value=<?php echo $title ?> required>
                <br>
              </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="birthday" class="form-control" id="birthday"  value=<?php echo $birthday; ?> required>
                </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 <br> <input type="text" class="form-control" name="website" id="website" value=<?php echo $website ?> required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                 <br> <input type="text" name="phone" class="form-control" id="phone"  value=<?php echo $phone; ?> required>
                </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <br><input type="text" class="form-control" name="city" id="city" value=<?php echo $city ?> required>
                </div>
                </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <br><input type="text" name="age" class="form-control" id="age"  value=<?php echo $age; ?> required>
                </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <br><input type="text" class="form-control" name="degree" id="degree" value=<?php echo $degree ?> required>
                </div>
                </div>
            
              <div class="row">
                <div class="col-md-6 form-group">
                 <br> <input type="text" name="email" class="form-control" id="email"  value=<?php echo $email; ?> required>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <br><input type="text" class="form-control" name="description" id="description" value=<?php echo $description ?> required>
                </div>
              </div>
              <br>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <br><div class="text-center"><button type="submit" name="edit" class="butonijem" style="width: 200px !important;  float:left">Update Skill</button></div>
              <div class="text-center"><button type="submit" name="delete" class="butonijem" style="width: 200px !important; ">Delete Skill</button></div>
              
</form>
</div>
 <?php }
     
  }
  
    public function update($email, $request)
    {
        $query = $this->db->pdo->prepare('UPDATE about SET aboutMe = :aboutMe, title = :title, 
        birthday = :birthday, website = :website, phone = :phone, city = :city, age = :age, 
        degree = :degree, email = :email, description = :description
        WHERE email = :email');
        $query->execute([
        'aboutMe'=> $request['aboutMe'],
        'title' => $request['title'],
        'birthday' => $request['birthday'],
        'website' => $request['website'],
        'phone' => $request['phone'],
        'city' => $request['city'],
        'age' => $request['age'],
        'degree' => $request['degree'],
        'email' => $request['email'],
        'description' => $request['description']
            
        ]);
        return header('Location: showAbout.php');
    }
    public function destroy($email)
    {
        $query = $this->db->pdo->prepare('DELETE from about WHERE email = :email');
        $query->execute(['email' => $email]);
      return header('Location: showAbout.php');
    }
}