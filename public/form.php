<?php
const DB_HOST = 'db';
const DB_USER = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'docker';

/*$dsn = 'mysql:host=db;port=3306;dbname=docker';
$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
$stmt = $pdo->query('select * from docker');
$result = $stmt->fetchAll();
print_r(count($result));*/

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 3306);

if ($db->connect_error) {
    die('Zur Zeit kann keine Verbindung zur Datenbank aufgebaut werden');
}

$sql = 'select * from gaestebuch';
$res = $db->query($sql);
var_dump($res);


