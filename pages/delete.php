<?php
global $con;
$id = $_GET['id'];

$result = $con->prepare("DELETE FROM photos WHERE id = ?");
$result->bind_param("i", $id);
$result->execute();
$result->close();
redirect("?page=successfuldelete");
