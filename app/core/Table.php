<?php 

class Table extends Database {

    private $table;
    private $fields;
    private $primary;

    public function __construct($table, $primary='id', $fields=[]) {
        $this->table = $table;
        $this->primary = $primary;
        $this->fields = $fields;
        parent::__construct();
    }

    public function getAll()
    {
        return parent::getAllDB($this->table);
    }

    public function getWhere($field, $value)
    {
        return parent::getWhereDB($this->table, $field, $value);
    }

    public function get($id)
    {
        return parent::getDB($this->table, $this->primary, $id);
    }

    public function insert($data)
    {
        return parent::insertDB($this->table, $data);
    }

    public function update($id, $data)
    {
        return parent::updateDB($this->table, $data, $this->primary, $id);
    }

    public function delete($id)
    {
        return parent::deleteDB($this->table, $this->primary, $id);
    }

    public function countAll()
    {
        return parent::countAllDB($this->table);
    }

    public function countWhere($field, $value)
    {
        return parent::countWhereDB($this->table, $field, $value);
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

}