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
<br><p><b>Question 2:</b></p>

<form id="wrapper2" name="wrapper2" action="page3.php" method="post" onsubmit="return validateRadio('yes_no');">
  <label for="yes_no_radio">Do you take nutritional supplements?</label>
<p>
<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>
  
<br><input type="radio" name="yes_no" id="radioYes"> Yes</input>
</p>
<p>
<input type="radio" name="yes_no" id="radioNo"> No</input>
</p><br>
<a class="btn btn-primary btn-sm float-end" href="page3.php" type="button">Next</a>
<a class="btn btn-primary btn-sm float-none" href="index.php" type="button">Back</a>
</div>
</form>

<?php include 'footer.php'?>

<script src="main.js"></script>

<!-- hidden field -->
<input type="hidden" id="page2ID" name="page2ID" value="page2">

</body>

</html>