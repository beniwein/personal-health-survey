<?php
$_SESSION["page9"] = $_POST["page9"];
?>

<body>
  <?php include 'header.php';?>
 
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 10:</b> On a typical day, how many of your
meals are microwaved or prepared?</p>

<form id="form" name="form" action="feedback.php" method="post">
<span class="error">* <?php echo $keyErr;?></span>  

<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="key10">

<a class="btn btn-success btn-sm float-end" href="feedback.php" type="button" id="btn10">Check</a>

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<div class="meal">
<img src="img/meal-microwaved.jpg" alt="Microwaved meal">
</div>
<a class="btn btn-primary btn-sm float-none" href="page9.php" type="button">Back</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="lastPageID" name="lastPageID" value="page10">

<script src="main.js"></script>
</body>

</html>