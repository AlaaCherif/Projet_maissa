<?php


class OrderRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('orders');
    }
    public function addToDatabase($tab)
    {
    $request="INSERT INTO ".$this->tableName." (name,lastname)
    VALUES('test','test')";
    $response=$this->db->prepare($request);
    $response->execute([]);
    }
}