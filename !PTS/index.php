<?php
  session_start();
  include('conn.php');
?>

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">

  <title>PATCH Ticketing System</title>
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'>

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <?php include 'index/header.php';?>
    
  <?php include 'index/page-content.php';?>

  <?php include 'index/footer.php';?>

  <?php include 'index/script.php';?>

</body>
</html>
