<?php

echo 'Hello';
echo 'Hello';
echo 'Hello';
echo 'Hello';
echo 'Hello';
echo 'Hello';
echo 'Hello';

$c = mysqli_connect('mysql', 'root', 'root', 'docker-db');

//$c->query('CREATE DATABASE `docker-db`');
//$sql = 'INSERT INTO users (name) VALUES ("Dal")';
//$result = mysqli_query($c, $sql);

$result = mysqli_query($c, 'SELECT * FROM users');
while ($row = mysqli_fetch_array($result)) {
    var_dump($row['name']);
}

