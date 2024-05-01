<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Levels.controller.php");

$levels = new LevelsController();

if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $levels->delete($id);
} else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $levels->update($data, $id);
} else {
    $levels->index();
}