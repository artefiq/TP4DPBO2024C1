<?php

class DB
{
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $db_link;
    private $result;

    public function __construct($db_host, $db_user, $db_pass, $db_name)
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }

    public function open()
    {
        $this->db_link = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if (!$this->db_link) {
            die('Could not connect: ' . mysqli_connect_error());
        }
    }

    public function execute($query)
    {
        $this->result = mysqli_query($this->db_link, $query);
        if (!$this->result) {
            die('Query failed: ' . mysqli_error($this->db_link));
        }
        return $this->result;
    }

    public function getResult()
    {
        if ($this->result) {
            return mysqli_fetch_array($this->result);
        }
        return null;
    }

    public function close()
    {
        mysqli_close($this->db_link);
    }
}
