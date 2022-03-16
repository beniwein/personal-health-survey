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
<p><b>Your Result:</b></p>
<img src="img/unhealthy-lifestyle-word-cloud.jpg" alt="Healthy lifestyle heart">

<a class="btn btn-primary btn-sm float-end" href="page2.php" type="button">Back to Home</a>

<!-- hidden field -->
<input type="hidden" id="custId" name="custId" value="feedback-unhealthy.php">

<script src="main.js"></script>
</body>

</html>