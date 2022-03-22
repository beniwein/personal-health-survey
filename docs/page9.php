<?php
$_SESSION["page8"] = $_POST["page8"];
?>

<body>
  <?php include 'header.php';?>
  <?php include 'data-collector.php'?>

<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 9:</b> On a typical day, how many of your
meals or snacks contain fruit?</p>
<form id="form" name="form" action="page10.php" method="post" onsubmit="return validateNumber('quantity')">
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="key09">

<a class="btn btn-primary btn-sm float-end" href="page10.php" type="button" id="btn9">Next</a>

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<div class="meal">
<img src="img/meal-fruits.jpg" alt="Fruity meal">
</div>
<a class="btn btn-primary btn-sm float-none" href="page8.php" type="button">Back</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="lastPageID" name="lastPageID" value="page9">

<script src="main.js"></script>
</body>

</html>