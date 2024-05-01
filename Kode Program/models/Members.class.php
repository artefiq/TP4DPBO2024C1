<?php

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function getMembersById($id)
    {
        $query = "SELECT * FROM members WHERE id = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $level = $data['id_level'];
        $branch = $data['id_branch'];

        $query = "INSERT INTO members VALUES ('', '$name', '$email', '$phone', $level, $branch)";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM members WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data, $id)
    {

        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $level = $data['id_level'];
        $branch = $data['id_branch'];

        $query = "UPDATE members SET name = '$name', email = '$email', phone = '$phone', id_level = '$level', id_branch = '$branch' WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
