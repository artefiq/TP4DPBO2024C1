<?php
class BranchesView
{
    public function render($data)
    {
        $no = 1;
        $branchesData = null;
        foreach ($data["branches"] as $val) {
            list($id, $name, $address) = $val;
            $branchesData .= "<tr>
            <th>" . $no++ . "</th>
            <td>" . $name . "</td>
            <td>" . $address . "</td>
            <td>
                <a href='editBranches.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
                <a href='branches.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
            </td>
            </tr>";
        }

        $tpl = new Template("templates/branches.html");
        $tpl->replace("DATA_TABEL", $branchesData);
        $tpl->write();
    }
}
