<?php

include('includes/_config.php');

// select from
$sql = 'SELECT * FROM customer';

// set results
$result = mysqli_query($conn, $sql);

// fetch all customers as array
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer List</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<div class="list">
    <main>
    <h2>Customer List</h2> <br/><br/>
    <?php foreach($customers as $customer){?>
        <li>
          <a href="customer.php?id=<?php echo $customer['id']; ?>">
            <?php echo $customer['last_name']; ?>, <?php echo $customer['first_name'];?>
          </a>
        </li>
    <!-- <ul> -->
      <li>Phone number: <?php echo $customer['phone']; ?></li>
      <li>Email address: <?php echo $customer['email']; ?></li><br/><br/>
    <!-- </ul> -->
    <?php  } ?>
    </main>
  </div>
  
</body>
</html>