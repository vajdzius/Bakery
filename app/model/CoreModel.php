<?php

namespace app\model;

class CoreModel
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'vm_bakery';

    private $conn;

    protected $table;

    public function __construct()
    {
        if (!$this->table)
            die ('No table name provided');
    }

    private function connect ()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->conn)
        {
            die("Could not connect");
        }

        $this->conn->set_charset('utf8mb4');
    }

    protected function query(string $query)
    {


        $this->connect();

        $result = $this->conn->query ($query);

        if ($result)
        {
            $this->conn->close();
            return $result;
        }

        print_r($this->conn);
        $this->conn->close();
        die();
    }

    protected function generateInsertQuery(array $data, bool $uuid = false) : string
    {
        if ($uuid)
            $data['id'] = uniqid ();

        $keys = $values = '';

        foreach ($data as $key => $value) {

            $keys .= "`$key`, ";
            $values .= "'$value', ";
        }

        $keys = rtrim($keys, ", ");
        $values = rtrim($values, ", ");

        $query = "INSERT INTO `" . $this->table . "` ($keys) VALUES ($values)";

        return $query;
    }

    public function list ()
    {
        $query = "SELECT * FROM `" . $this->table . "` WHERE `deleted_at` IS NULL";
        return $this->query($query);
    }
}