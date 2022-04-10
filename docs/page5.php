<?php
$_SESSION["page4"] = $_POST["page4"];
?>

<body>
  <?php include 'header.php';?>

<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 5:</b> Do you feel you do too little, just enough
or way too much additional physical activity?</p>
<form id="form" name="form" action="page6.php" method="post">
<label class="form-label" for="range5">Self-assessment:</label>

  <input type="range" class="form-range" step="0.5" min="0" max="5" name="key05" id="rangeIndex"/>

<div class="d-flex justify-content-between">
    <div>
        Far too little 
    </div>
    <div>
        just right
    </div>
    <div>
        far too much 
    </div>
</div>
<!-- Visualisierung -->
<div class="gradient"></div><br> 

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<a class="btn btn-primary btn-sm float-end" href="page6.php" type="button" id="btn5">Next</a>
<a class="btn btn-primary btn-sm float-none" href="page4.php" type="button">Back</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="lastPageID" name="lastPageID" value="page5">

<script src="main.js"></script>
</body>

</html>