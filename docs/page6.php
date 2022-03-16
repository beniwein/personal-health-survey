<!DOCTYPE html>
<html lang="en">

<head>
  <title>Umfrage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
<div class="header">
    <?php include 'header.php'?>
</div>
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 6:</b> On a typical day, how many of your
meals or snacks contain carbohydrates?</p>
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="quantity">
<a class="btn btn-primary btn-sm float-end" href="page7.php" type="button">Next</a>
<div class="meal">
<img src="img/meal-carbohydrates.jpg" alt="Meal with carbohydrates">
</div>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="custId" name="custId" value="page6.php">

<script src="main.js"></script>
</body>

</html>