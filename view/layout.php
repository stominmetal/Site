<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Map</title>
    <link href='css/app.css' rel='stylesheet' type='text/css'/>
    <link href='css/login.css' rel='stylesheet' type='text/css'>
    <script src="js/app.js"></script>
</head>
<body>

<!--Header-->
<?php include("_header.php"); ?>

<div class="container">
    <?php
        if(!(in_array($page, ['home']))){
            include(__DIR__."/../pages//".$page.'.php');
        } else {?>
    <div class="left">
        <!--Content-->
        <?php include(__DIR__.'/../pages//'.$page.'.php'); ?>
    </div>

    <?php } ?>
</div>

<!--Footer-->
<?php include("_footer.php"); ?>

<!--jQuery Library-->
<script src="https://code.jquery.com/jquery-3.0.0.min.js"
        integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous">
</script>

<!--Google Maps API Library-->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD73w03Ds7-bienx-1VKScLJernyc7be4c">
</script>

<!--JS-->
<?php
include("_js_vars.php");
?>

<!--Local JavaScript Files Directory-->
<script src="js/map.js"></script>

</body>
</html>