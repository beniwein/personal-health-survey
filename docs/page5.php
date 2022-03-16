<body>
<div class="header">
    <?php include 'header.php'?>
</div>
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<br><p><b>Question 5:</b> Do you feel you do too little, just enough
or way too much additional physical activity?</p>
<form id="form-5" name="form-5" action="page6.php">
<label class="form-label" for="range5">Self-assessment:</label>
<div class="range">
  <input type="range" class="form-range" step="0.5" min="0" max="5" id="range5" />
</div>
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

<a class="btn btn-primary btn-sm float-end" href="page6.php" type="button" id="btn5">Next</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="page5ID" name="page5ID" value="page5">

<script src="main.js"></script>
</body>

</html>