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
<br><p><b>Question 3:</b> How important is physical activity to you?</p>

<form id="form-3" name="form-3" action="page4.php">
<label class="form-label" for="range3">Self-assessment:</label>
<div class="range">
  <input type="range" class="form-range" step="0.5" min="0" max="5" id="range3" />
</div>
<div class="d-flex justify-content-between">
    <div>
        Not at all important 
    </div>
    <div>
        Very important 
    </div>
</div>
<!-- Visualisierung -->
<div class="gradient"></div><br> 

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<a class="btn btn-primary btn-sm float-end" href="page4.php" type="button" id="btn3">Next</a>
<a class="btn btn-primary btn-sm float-none" href="page2.php" type="button">Back</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="page3ID" name="page3ID" value="page3">

<script src="main.js"></script>
</body>

</html>