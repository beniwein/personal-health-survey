<?php
$_SESSION["page6"] = $_POST["page6"];
?>

<body>
  <?php include 'header.php';?>
 
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 7:</b> On a typical day, how many of your
meals or snacks contain protein?</p>

<form id="form" name="form" action="page8.php" method="post">
<span class="error">* <?php echo $keyErr;?></span>
  
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="key07">

<a class="btn btn-primary btn-sm float-end" href="page8.php" type="button" id="btn7">Next</a>

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<div class="meal">
<img src="img/meal-protein.jpg" alt="Protein-meal">
</div>
<a class="btn btn-primary btn-sm float-none" href="page6.php" type="button">Back</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="lastPageID" name="lastPageID" value="page7">

<script src="main.js"></script>
</body>

</html>