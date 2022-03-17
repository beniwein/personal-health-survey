<body>
  <?php 
  session_start();
  session_destroy();
    
  include 'header.php'
  ?>

<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 4:</b></p>
<div id="wrapper">
  <label for="yes_no_radio">What additional physical activity do you
do most?</label>
<!-- Default checkboxes -->
<form id="wrapper4" name="wrapper4" action="page5.php">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">No additional physical activity</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Lifting weights</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Walking</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Jogging</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Running</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Swimming</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Dancing</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Aerobics</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Pilates</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Team sports</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
  <label class="form-check-label" for="flexCheckDefault">Other:</label>
</div>
<div class="form-outline">
  <input type="text" id="form12" class="form-control" />
  <label class="form-label" for="form12">Short Description</label>
</div>

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<a class="btn btn-primary btn-sm float-end" href="page5.php" type="button" id="btn4">Next</a>
<a class="btn btn-primary btn-sm float-none" href="page3.php" type="button">Back</a>
</div>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="page4ID" name="page4ID" value="page4">

<script src="main.js"></script>
</body>

</html>