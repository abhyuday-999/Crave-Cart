<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zomato Clone</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Zomato Clone</h1>
  </header>
  <main>
    <h2>Restaurants</h2>
    <div class="restaurant-list">
      <?php
        $query = "SELECT * FROM restaurants";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="restaurant">';
          echo '<img src="images/' . $row['image'] . '" alt="' . $row['name'] . '">';
          echo '<h3><a href="restaurant.php?id=' . $row['id'] . '">' . $row['name'] . '</a></h3>';
          echo '</div>';
        }
      ?>
    </div>
  </main>
</body>
</html>