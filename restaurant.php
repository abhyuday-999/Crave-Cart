<?php include 'includes/db.php'; ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM restaurants WHERE id = $id";
$restaurant = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $restaurant['name']; ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1><?php echo $restaurant['name']; ?></h1>
  </header>
  <main>
    <h2>Menu</h2>
    <ul>
      <li>Pizza - $10</li>
      <li>Burger - $8</li>
      <li>Pasta - $12</li>
    </ul>
    <form>
      <label>Your Name: <input type="text" name="name"></label><br>
      <label>Food Item: <input type="text" name="item"></label><br>
      <button type="submit">Order</button>
    </form>
  </main>
</body>
</html>