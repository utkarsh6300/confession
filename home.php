
<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIIT-BH Confession</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>CONFESSIONS-IIIT-BH</h1>
    <div class="disc">
    <p>Do you have crush on someone or do you have some weird fantasy or do you share something or want something from someone but can't ask   </p>
    <P>Don't worry we are here to help you</P>
    <p>write whatever you want we will not reveal who you are ,Seriously we didn't even get to know</p>
    <p>So what are you waiting for Write</p>
    <a href="index.php">click here</a>
    </div>
    <div class="content">
    <?php 
          $sql = "SELECT * FROM `data`";
          $result = mysqli_query($conn, $sql);
          
          while($row = mysqli_fetch_assoc($result)){
            
            echo "
               
            <div id='js' class='DynamicContent'> 
  
            <p class='secret'>"  . $row['confessed'] .
           "</p> 
            </div>
            ";
        } 
          ?>


    </div>
    <footer>
        <a href="index.php">Did you feel like you also should say something click here and get it done</a>
    </footer>
</body>
</html>