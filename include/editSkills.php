<?php 
include('db_con.php'); ?>

<?php
$teknologjia = $_POST['teknologjia'];
$perqindja = $_POST['perqindja'];

if((isset($_POST["update"]))) {
$query = 'UPDATE skills SET perqindja = :perqindja, perqindja = :perqindja';
$result = mysqli_query($conn, $query);

            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'content' => $request['content'],
            'photo' => $request['photo'],
            'post_author' => $request['post_author'],
            'posts_id' => $request['posts_id']
       
        return header('Location: showSkills.php');
?>