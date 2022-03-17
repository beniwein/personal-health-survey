<body>
  <?php 
  session_start();
  session_destroy();
    
  include 'header.php'
  ?>

<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 10:</b> On a typical day, how many of your
meals are microwaved or prepared?</p>
<form id="form-10" name="form-10" action="feedback.php">
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="quantity">

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
<input type="hidden" id="page10ID" name="page10ID" value="page10">

<script src="main.js"></script>
</body>

</html>