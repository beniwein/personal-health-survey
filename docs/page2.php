<?php
$_SESSION["index"] = $_POST["index"];
?>

<body>
  <?php include 'header.php';?>
  <?php include 'data-collector.php'?>

<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 2:</b></p>

<form id="form" name="form" action="page3.php" method="post" onsubmit="return validateRadio('radioNo, radioYes')">
  <label for="yes_no_radio">Do you take nutritional supplements?</label>
<p>
<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>
  
<br><input type="radio" name="yesNo" id="radioNo"> Yes</input>
</p>
<p>
<input type="radio" name="yesNo" id="radioYes"> No</input>
</p><br>
<a class="btn btn-primary btn-sm float-end" href="page3.php" type="button">Next</a>
<a class="btn btn-primary btn-sm float-none" href="index.php" type="button">Back</a>
</div>
</form>

<?php include 'footer.php'?>

<script src="main.js"></script>

<!-- hidden field -->
<input type="hidden" id="lastPageID" name="lastPageID" value="page2">

</body>

</html>