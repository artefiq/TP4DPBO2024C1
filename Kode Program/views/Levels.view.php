<?php
class LevelsView
{
    public function render($data)
    {
        $no = 1;
        $levelsData = null;
        foreach ($data["levels"] as $val) {
            list($id, $name, $benefits) = $val;
            $levelsData .= "<tr>
            <th>" . $no++ . "</th>
            <td>" . $name . "</td>
            <td>" . $benefits . "</td>
            <td>
                <a href='editLevels.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
                <a href='levels.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
            </td>
            </tr>";
        }

        $tpl = new Template("templates/levels.html");
        $tpl->replace("DATA_TABEL", $levelsData);
        $tpl->write();
    }
}
