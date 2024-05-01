<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Branches.controller.php");

$branches = new BranchesController();

if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $branches->delete($id);
} else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $branches->update($data, $id);
} else {
    $branches->index();
}