<?php
class MembersView
{
    public function render($data)
    {
        $no = 1;
        $membersData = null;
        foreach ($data["members"] as $val) {
            list($id, $name, $email, $phone, $id_levels, $id_branch) = $val;
            $membersData .= "<tr>
            <th>" . $no++ . "</th>
            <td>" . $name . "</td>
            <td>" . $email . "</td>
            <td>" . $phone . "</td>";

            foreach ($data["levels"] as $level) {
                if ($level["id_level"] == $id_levels) {
                    $membersData .= "<td>" . $level["level"] . "</td>";
                }
            }

            foreach ($data["branches"] as $branch) {
                if ($branch["id_branch"] == $id_branch) {
                    $membersData .= "<td>" . $branch["name_branch"] . "</td>";
                }
            }
            
            $membersData .= "<td>
                <a href='editMembers.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
                <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
            </td>
            </tr>";
        }

        $tpl = new Template("templates/index.html");
        $tpl->replace("DATA_TABEL", $membersData);
        $tpl->write();
    }
}
