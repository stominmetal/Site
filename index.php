<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Map</title>
    <link href='css/app.css' rel='stylesheet' type='text/css'/>
</head>
<body>

<!--Header-->
<?php include("modules/_header.php"); ?>

<div class="container">
    <div class="left">
        <!--Content-->
        <?php include("modules/_content.php"); ?>
    </div>
    <div class="right">
        <!--Aside-->
        <?php include("modules/_aside.php") ?>
    </div>
</div>

<hr>

<!--Footer-->
<?php include("modules/_footer.php"); ?>

<!--jQuery Library-->
<script src="https://code.jquery.com/jquery-3.0.0.min.js"
        integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous">
</script>

<!--Google Maps API Library-->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD73w03Ds7-bienx-1VKScLJernyc7be4c">
</script>

<!--Local JavaScript Files Directory-->
<script src="js/app.js"></script>

</body>
</html>