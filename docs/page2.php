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
<br><p><b>Question 2:</b></p>
<div id="wrapper">
  <label for="yes_no_radio">Do you take nutritional supplements?</label>
<p>
<br><input type="radio" name="yes_no" checked> Yes</input>
</p>
<p>
<input type="radio" name="yes_no"> No</input>
</p>
<a class="btn btn-primary btn-sm float-end" href="page3.php" type="button">Next</a>
</div>
<script src="main.js"></script>
</body>

</html>