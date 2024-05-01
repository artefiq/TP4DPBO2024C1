<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Branches.controller.php");

$branches = new BranchesController();

if (isset($_POST['submit'])) {
    //memanggil add
    $branches->add($_POST);
} else {
    $branches->addBranchesPage();
}
?>