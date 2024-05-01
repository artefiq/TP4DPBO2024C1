<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

if (!empty($_GET['id_hapus'])) {
  $id = $_GET['id_hapus'];
  $members->delete($id);
} else if (!empty($_GET['id_edit'])) {
  $id = $_GET['id_edit'];
  $members->update($data, $id);
} else {
  $members->index();
}