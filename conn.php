<?php

function connect()
{
    $conn = new mysqli("localhost:3308", "root", "", "otrsphp");
    if (!$conn) die("Database is being upgrade!");
    return $conn;
}
$conn = connect();
if (!$conn) die("Under Construction!");

