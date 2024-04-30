<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$member = new MembersController();

if (isset($_POST['add'])) {
  $member->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
  $id = $_GET['id_hapus'];
  $member->delete($id);
} else if (!empty($_GET['id_edit'])) {
  $id = $_GET['id_edit'];
  $member->update($data, $id);
} else {
  $member->index();
}

// while ($row = $result->fetch_assoc()) {
//   echo "
      
//         <td>
//                   <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
//                   <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
//                 </td>
//       </tr>
//       ";
// }
