

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $confess= $_POST["confess"] ;
    

     // Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "confessions";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

     
        $sql="INSERT INTO `data` (`sn`, `confessed`) VALUES (NULL, '$confess')";
        $res = mysqli_query($conn, $sql);
        if($res){
          echo'
          <script>
          alert("submitted successfully");
      </script>
          ';
      }
      else{
          echo '
          <script>
          alert("We could not insert the record successfully");
      </script>
          ';
      }
    
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confession</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <a href="home.php">CONFESSIONS-IIIT-BH</a>
        
    </header>
    <div class="desc">
    <p>Do you have crush on someone or do you have some weird fantasy or do you share something or want something from someone but can't ask   </p>
    <P>Don't worry we are here to help you</P>
    <p>write whatever you want we will not reveal who you are ,Seriously we didn't even get to know</p>
    <p>So what are you waiting for Write</p>
    </div>
    <form action="index.php" method="POST">
        <textarea name="confess" id="confess" cols="30" rows="10"> confess whatever you want to </textarea> <br>
<input type="submit" value="Submit" id="sub">
    </form>

    <footer>
        <a href="home.php">click here to watch previous confessions </a>
    </footer>
</body>
</html>