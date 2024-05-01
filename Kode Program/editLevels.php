<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Levels.controller.php");

$levels = new LevelsController();

if (isset($_POST['submit'])) {
    //memanggil add
    $levels->update($_POST, $_POST['id']);
} else {
    $levels->editLevelsPage($_GET['id_edit']);
}
?>