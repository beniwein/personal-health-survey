<body>
<div class="header">
    <?php include 'header.php'?>
</div>
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 7:</b> On a typical day, how many of your
meals or snacks contain protein?</p>
<form id="form-7" name="form-7" action="page8.php">
<label for="quantity">QTY:</label>
  <input type="number" id="quantity" name="quantity">
<a class="btn btn-primary btn-sm float-end" href="page8.php" type="button" id="btn7">Next</a>
<div class="meal">
<img src="img/meal-protein.jpg" alt="Protein-meal">
</div>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="page7ID" name="page7ID" value="page7">

<script src="main.js"></script>
</body>

</html>