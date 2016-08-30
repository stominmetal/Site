<!--Google Maps API Library-->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD73w03Ds7-bienx-1VKScLJernyc7be4c">
</script>
<div class="message success" id="success"><?php if (isset($_SESSION['user']['success'])) echo $_SESSION['user']['success']; ?></div>
<div class="row">
    <div id="map"></div>
</div>