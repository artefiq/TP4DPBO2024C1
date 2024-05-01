<?php

class Levels extends DB
{
    function getLevels()
    {
        $query = "SELECT * FROM level";
        return $this->execute($query);
    }

    function getLevelsById($id)
    {
        $query = "SELECT * FROM level WHERE id_level = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $benefits = $data['benefits'];

        $query = "INSERT INTO level VALUES ('', '$name', '$benefits')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM level WHERE id_level = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data, $id)
    {
        $name = $data['name'];
        $benefits = $data['benefits'];

        $query = "UPDATE level SET level = '$name', benefits = '$benefits' WHERE id_level = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
