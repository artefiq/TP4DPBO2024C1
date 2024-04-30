<?php
class MembersView
{
    public function render($data)
    {
        $no = 1;
        $membersData = null;
        foreach ($data as $val) {
            list($id, $name, $email, $phone) = $val;
            $membersData .= "<tr>
            <th>" . $id . "</th>
            <td>" . $name . "</td>
            <td>" . $email . "</td>
            <td>" . $phone . "</td>
            <td>" . 'BELUM' . "</td>
            <td>
              <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
              <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
            </td>
            </tr>";
        }

        $tpl = new Template("templates/index.html");
        $tpl->replace("DATA_TABEL", $membersData);
        $tpl->write();
    }
}
