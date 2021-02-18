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
<form action="editAbout.php" method="post" onSubmit="" role="form"  style="width: 200%; margin-top: 100px; margin-left:400px; margin-bottom: 100px">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" style="width: 600px !important;" name="aboutMe" class="formm-control" id="aboutMe" value=<?php echo $aboutMe; ?> required>
                 </div> 
                  </div>
                  <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" style="width: 600px !important;" class="formm-control" name="title" id="title"  value=<?php echo $title ?> required>
               
              </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" style="width: 600px !important;" name="birthday" class="formm-control" id="birthday"  value=<?php echo $birthday; ?> required>
                </div>
      </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" style="width: 600px !important;" class="formm-control" name="website" id="website" value=<?php echo $website ?> required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" style="width: 600px !important;" name="phone" class="formm-control" id="phone"  value=<?php echo $phone; ?> required>
                </div>
      </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 <input type="text" style="width: 600px !important;" class="formm-control" name="city" id="city" value=<?php echo $city ?> required>
                </div>
                </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" style="width: 600px !important;" name="age" class="formm-control" id="age"  value=<?php echo $age; ?> required>
                </div>
      </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" style="width: 600px !important;" class="formm-control" name="degree" id="degree" value=<?php echo $degree ?> required>
                </div>
                </div>
            
              <div class="row">
                <div class="col-md-6 form-group">
                 <input type="text" style="width: 600px !important;" name="email" class="formm-control" id="email"  value=<?php echo $email; ?> required>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" style="width: 600px !important;" class="formm-control" name="description" id="description" value=<?php echo $description ?> required>
                </div>
              </div>
              <br>
              <button type="submit" name="edit" class="butt" style="width: 150px !important; margin-left:120px; margin-right:50px ">Update</button>
              <button type="submit" name="delete" class="butt" style="width: 150px !important; ">Delete</button>
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