<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_Benitez_Dominic');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>