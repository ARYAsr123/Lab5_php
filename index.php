<?php

require_once("class/Database.php");
require_once("template/header.php");
require_once("class/Form.php");

class Main
{
    private $konfig = [];
    public function __construct($namaModul)
    {
        $this->konfig = $namaModul;
    }
    public function x($namaUrl)
    {
        if (array_key_exists($namaUrl, $this->konfig)) {
            require($this->konfig[$namaUrl]);
        } else {
            require($this->konfig["home"]);
        }
    }
}

$url = [
    "home" => "module/home.php",
    "add" => "module/artikel/add.php",
    "update" => "module/artikel/update.php",
    "delete" => "module/artikel/delete.php",
    "about" => "module/about.php",
    "contact" => "module/contact.php"
];
$main = new Main($url);
$main->x(@$_REQUEST["mod"]);
require_once("template/footer.php");
