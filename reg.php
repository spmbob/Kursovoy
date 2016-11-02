<meta charset="Utf-8">
<?php
$host='localhost';
$dbname='dbname';
$user='root';
$password='';
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8");

if (isset($_POST['user'])) { $user = $_POST['user'];}
if (isset($_POST['password'])) { $password = $_POST['password'];}
    $result2 = $db->query("INSERT INTO dbname (user,password) VALUES('$user','$password')");

?>