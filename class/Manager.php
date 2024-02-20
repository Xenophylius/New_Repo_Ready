<?php 

abstract class Manager {

    protected $db;
    protected $className;

// CONSTRUCT
    public function __construct(PDO $db)
    {
        $this->db = $db;
        $this->className = strtolower(get_class($this));
    }

// METHOD
    public function findAll()
    {
        $preparedRequest = $this->db->prepare("SELECT * FROM $this->className");
        $preparedRequest->execute();
        $findAll = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
        return $findAll;
    }
}