<?php


$mysqli = new mysqli('localhost', 'user', '123456', 'wordpress');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
} else {
    echo 'Connection successful!';
}
