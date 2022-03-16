<!DOCTYPE html>
<html lang="en">

<head>
  <title>Umfrage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
<div class="header">
    <?php include 'header.php'?>
</div>
<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<!-- Homepage-Intro -->
<p>Welcome to our Survey on "Nutrition, Fitness and Sport". Let's get started with
Question 1 out of 10. Check your final score after completion.</p><br>

<p><b>Question 1:</b> How healthy are you physically?</p>
<label class="form-label" for="customRange2">Self-assessment:</label>
<div class="range">
  <input type="range" class="form-range" min="0" max="5" id="customRange2" />
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

<?php include 'footer.php'?>

<!-- hidden field -->
<input type="hidden" id="custId" name="custId" value="index.php">

<script src="main.js"></script>
</body>

</html>