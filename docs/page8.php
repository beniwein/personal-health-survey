<?php
$_SESSION["page7"] = $_POST["page7"];
?>

<body>
  <?php include 'header.php';?>
 
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 8:</b> On a typical day, how many of your
meals or snacks contain vegetables?</p>

<form id="form" name="form" action="page9.php" method="post">
<span class="error">* <?php echo $keyErr;?></span>
  
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="key08">

<a class="btn btn-primary btn-sm float-end" href="page9.php" type="button" id="btn8">Next</a>

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<div class="meal">
<img src="img/meal-vegetables.jpg" alt="Meal with vegetables">
</div>
<a class="btn btn-primary btn-sm float-none" href="page7.php" type="button">Back</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="lastPageID" name="lastPageID" value="page8">

<script src="main.js"></script>
</body>

</html>