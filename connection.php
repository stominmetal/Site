<?php
// configuration
$host = 'localhost';
$dbname = 'vitron_stomin';
$user = 'root';
$pass = '';

$con = mysqli_connect($host, $user, $pass, $dbname);

/*-----------------------------------------------*/

function redirect(string $url) :string
{
    header("Location: ".$url);
    exit;
}

//taking picture information



/*
try {
    $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_PERSISTENT => true];
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, $options);
} catch (PDOException $ex) {
    echo 'ERROR: ' . $ex->getMessage();
    exit;
}


function query($connection, $sql, $params)
{
    $sth = $connection->prepare($sql);
    foreach ($params as $key => $value) {
        $sth->bindParam(':' . $key, $value, PDO::PARAM_STR);
    }
    return $sth->execute();
}
*/

/* ---------------------------------- */