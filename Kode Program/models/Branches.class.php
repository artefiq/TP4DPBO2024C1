<?php

class Branches extends DB
{
    function getBranches()
    {
        $query = "SELECT * FROM branch";
        return $this->execute($query);
    }

    function getBranchesById($id)
    {
        $query = "SELECT * FROM branch WHERE id_branch = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $address = $data['address'];

        $query = "INSERT INTO branch VALUES ('', '$name', '$address')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM branch WHERE id_branch = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data, $id)
    {
        $name = $data['name'];
        $address = $data['address'];

        $query = "UPDATE branch SET name_branch = '$name', address = '$address' WHERE id_branch = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
