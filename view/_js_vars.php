<script>
    <?php
    $host = 'localhost';
    $dbname = 'vitron_stomin';
    $user = 'root';
    $pass = '';

    $con = mysqli_connect($host, $user, $pass, $dbname);
    $result = mysqli_query($con, "SELECT `lat`,`long`,`filename`,`upload_time`,`date`,`device_model`,`fullname` as user_name FROM photos JOIN users ON photos.user_id = users.id");

    $points =  mysqli_fetch_all($result,MYSQLI_ASSOC);

    echo "var points = " . json_encode($points) . ";";
    ?>

</script>
