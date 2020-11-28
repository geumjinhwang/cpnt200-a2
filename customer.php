<?php

  include('includes/_config.php'); 

  // get id 
  $id = $_GET['id'];
  
  if (isset($id) && (int)$id > 0 && (int)$id < 6) {
    // show customer by their id (#)
    $sql = "SELECT * FROM customer WHERE id='$id'";

    // result
    $result = mysqli_query($conn, $sql);

    // fetch customer as array
    $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $profile = 'profile.php';
  }
  
  else {
    $profile = 'includes/error.php';
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Profile</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
</head>
<body>

  <div class="profile">
    <main>
    <?php 
      include($profile);
    ?>
      <p><a href="index.php"><p>Go back</p></a></p>
    </main>
  </div>
  
</body>
</html>