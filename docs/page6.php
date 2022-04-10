<body>
  <?php include 'header.php';?>
 
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 6:</b> On a typical day, how many of your
meals or snacks contain carbohydrates?</p>

<!-- Test: PHP Validation gemäss w3schools -->
<?php
$keyErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["key06"])) {
    $keyErr = "Quantity..?";
  } else {
    $key06 = test_input($_POST["key06"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="key06" value="<?php echo $key06;?>">
  <span class="error">* <?php echo $keyErr;?></span>

<a class="btn btn-primary btn-sm float-end" href="page7.php" type="button" id="btn6">Next</a>

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<div class="meal">
<img src="img/meal-carbohydrates.jpg" alt="Meal with carbohydrates">
</div>
<a class="btn btn-primary btn-sm float-none" href="page5.php" type="button">Back</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="lastPageID" name="lastPageID" value="page6">

<script src="main.js"></script>
</body>

</html>