<body>
<div class="header">
    <?php include 'header.php'?>
</div>
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<p>Welcome to our Survey on "Nutrition, Fitness and Sport". Let's get started with
Question 1 out of 10. Check your final score after completion.</p><br>

<p><b>Question 1:</b> How healthy are you physically?</p>

<form id="index-form" name="index-form" action="page2.php">
<label class="form-label" for="rangeIndex">Self-assessment:</label>
<div class="range">
  <input type="range" class="form-range" step="0.5" min="0" max="5" id="rangeIndex" />
</div>
<div class="d-flex justify-content-between">
    <div>
        Not at all healthy 
    </div>
    <div>
        Extremely healthy 
    </div>
</div>
<div class="gradient"></div><br> 

<a class="btn btn-primary btn-sm float-end" href="page2.php" type="button">Next</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="indexID" name="indexID" value="index">

<script src="main.js"></script>
</body>

</html>