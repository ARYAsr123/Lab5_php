<?php

$database = new Database();
$nim = $_GET["nim"];

if (isset($_POST['submit'])) {
    $data = [
        'nama' => $_POST['nama'],
        'gender' => $_POST['gender'],
        'hobi' => $_POST['hobi']
    ];
    $database->update("lab5_php", $data, "nim=" . $nim);
    header("location: home");
}

$data = $database->get("lab5_php", "where nim=" . $nim);

$form = new Form("", "submit");
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("gender", "Gender", $data["gender"]);
$form->addField("hobi", "Hobi", $data["hobi"]);
$form->displayForm();
