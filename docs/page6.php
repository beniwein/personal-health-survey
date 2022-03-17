<body>
<div class="header">
    <?php 
    session_start();
    session_destroy();
    
    include 'header.php'
    ?>
</div>
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 6:</b> On a typical day, how many of your
meals or snacks contain carbohydrates?</p>
<form id="form-6" name="form-6" action="page7.php" method="post" onsubmit="return validateNumber();">
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="quantity">

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
<input type="hidden" id="page6ID" name="page6ID" value="page6">

<script src="main.js"></script>
</body>

</html>