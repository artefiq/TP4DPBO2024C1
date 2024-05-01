<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Branches.controller.php");

$branches = new BranchesController();

if (isset($_POST['submit'])) {
    //memanggil add
    $branches->update($_POST, $_POST['id']);
} else {
    $branches->editBranchesPage($_GET['id_edit']);
}
?>