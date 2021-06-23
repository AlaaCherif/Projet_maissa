<?php


class Repository
{
    protected $db;
    protected $tableName;
    public function __construct($tableName)
    {
        $this->tableName=$tableName;
        $this->db=ConnexionBD::getInstance();

    }
}