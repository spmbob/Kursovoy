<meta charset="Utf-8">
<?php
$l = $_REQUEST['user'];
$p = $_REQUEST['password'];

$host='localhost';
$dbname='dbname';
$user='root';
$password='';
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8");

$st = $db->query('SELECT password,user FROM dbname');
foreach ($st->fetchAll() as $row) {
    $pp = $row['password'];

}

if ($pp == $p)
   require_once ;
else {
    echo "доступ запрещен";
    require_once "index.html";
};

?>


