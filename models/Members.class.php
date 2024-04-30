<?php
include_once("DB.class.php");

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];

        $query = "INSERT INTO members VALUES ('', '$name', '$email', '$phone')";

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

        $query = "UPDATE author SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
