<?php

class Database {

    protected $conn = null;

    public function __construct() {
        $this->conn = new mysqli(HOST, USER, PASS, DBASE);
    }

    public function __destruct() {
        $this->conn->close();
    }

    public function countAllDB($table)
    {
        $sql = "SELECT * FROM {$table}";
        return $this->conn->query($sql)->num_rows;
    }

    public function countWhereDB($table, $field, $key)
    {
        $sql = "SELECT * FROM {$table} WHERE {$field} = '{$key}'";
        return $this->conn->query($sql)->num_rows;
    }

    public function getAllDB($table)
    {
        $sql = "SELECT * FROM {$table}";
        $res = $this->conn->query($sql);

        $ret = [];

        while ($row = $res->fetch_assoc()) $ret[] = $row;

        return $ret;
    }

    public function getWhereDB($table, $field, $key)
    {
        $sql = "SELECT * FROM {$table} WHERE {$field} = '{$key}'";
        $res = $this->conn->query($sql);

        $ret = [];

        while ($row = $res->fetch_assoc()) $ret[] = $row;

        return $ret;
    }

    public function getAllQueryDB($sql)
    {
        $res = $this->conn->query($sql);

        $ret = [];

        while ($row = $res->fetch_assoc()) $ret[] = $row;

        return $ret;
    }

    public function getQueryDB($sql)
    {
        $res = $this->conn->query($sql);

        $ret = [];

        while ($row = $res->fetch_assoc()) $ret[] = $row;

        return $ret[0];
    }

    public function getDB($table, $primary, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE {$primary} = {$id}";
        $res = $this->conn->query($sql);

        $ret = [];

        while ($row = $res->fetch_assoc()) $ret[] = $row;

        return $ret[0];
    }

    public function insertDB($table, $data)
    {
        $sql = "INSERT INTO {$table}(";
        foreach ($data as $key => $value) {
            $sql .= "{$key}";
            if ($key!==array_key_last($data)) $sql .= ", ";
        }
        $sql .= ") VALUES (";
        foreach ($data as $key => $value) {
            $sql .= "'{$value}'";
            if ($key!==array_key_last($data)) $sql .= ", ";
        }
        $sql .= ")";

        return $this->conn->query($sql) ?: $this->conn->error;
    }

    public function updateDB($table, $data, $primary, $id)
    {
        $sql = "UPDATE {$table} SET ";
        foreach ($data as $key => $value) {
            $sql .= "{$key}='{$value}'";
            if ($key!==array_key_last($data)) $sql .= ", ";
        }
        $sql .= " WHERE {$primary}='{$id}'";
        // return $sql;
        return $this->conn->query($sql) ?: $this->conn->error;
    }

    public function deleteDB($table, $primary, $id)
    {
        $sql = "DELETE FROM {$table} WHERE {$primary} = {$id}";
        return $this->conn->query($sql);
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function checkConnection(): String
    {
        return $this->conn->connect_error ?: 'Berhasil';
    }
}