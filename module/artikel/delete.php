<?php

$database = new Database();
$nim = $_GET["nim"];
echo $nim;

if (isset($_GET["nim"])) {
    $database->delete("lab5_php", "where nim=" . $nim);
    header("Location: home");
}
