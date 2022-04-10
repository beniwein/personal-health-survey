<body>
  <?php    
  include 'header.php'
  ?>

<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<p>Welcome to our Survey on "Nutrition, Fitness and Sport". Let's get started with
Question 1 out of 10. Check your final score after completion.</p><br>

<p><b>Question 1:</b> How healthy are you physically?</p>

<form id="form" name="form" action="page2.php" method="post">
<label class="form-label" for="rangeIndex">Self-assessment:</label>

  <input type="range" class="form-range" step="0.5" min="0" max="5" name="key01" id="rangeIndex"/>

<div class="d-flex justify-content-between">
    <div>
        Not at all healthy 
    </div>
    <div>
        Extremely healthy 
    </div>
</div>
<div class="gradient"></div><br> 

<!-- JS-Validation -->
<p id="validation-warning" class="warning"></p>

<a class="btn btn-primary btn-sm float-end" href="page2.php" type="button">Next</a>
</form>

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="indexID" name="indexID" value="index">

<script src="main.js"></script>
</body>

</html>