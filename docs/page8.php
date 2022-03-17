<body>
  <?php 
  session_start();
  session_destroy();
    
  include 'header.php'
  ?>

</div>
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 8:</b> On a typical day, how many of your
meals or snacks contain vegetables?</p>
<form id="form-8" name="form-8" action="page9.php">
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="quantity">

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
<input type="hidden" id="page8ID" name="page8ID" value="page8">

<script src="main.js"></script>
</body>

</html>