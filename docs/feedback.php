<body>
<?php include 'header.php'?>

<br><h2>wellness hotel FIT - Demo:</h2>
<h3>Online survey - personal health</h3>
<p><b>Your Result:</b></p>

<?php
    session_start();

    $_SESSION["page10"] = $_POST["page10"];

     function healthy() {
        $healthy = true;

        if ($_SESSION["key03"] >= 3 && $_SESSION["key06"] >= 2 && 
            $_SESSION["key07"] >= 2 && $_SESSION["key08"] >= 1 &&
            $_SESSION["key09"] >= 1)
        {
            return true;
        }
        return false;
    }
?>

<?php

$contentHealthy = file_get_contents('img/healthy_lifestyle_heart.jpg');
$contentUnhealthy = file_get_contents('img/unhealthy-lifestyle-word-cloud.jpg');
body('Content-Type: image/jpg');

if (healthy()) {

    echo $contentHealthy;

    } else {

    echo $contentUnhealthy;

    }
?>

<a class="btn btn-primary btn-sm float-end" href="" type="button">Back to fitandwell</a>

<!-- hidden field -->
<input type="hidden" id="feedback-healthyId" name="feedback-healthyId" value="feedback-healthy">

<script src="main.js"></script>
</body>

</html>