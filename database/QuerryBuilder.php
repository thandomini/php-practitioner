<?php

class QuerryBuilder{

    protected $pdo;

    public function __constructor(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){

        $statement = $this->$pdo->prepare('select * from {$table}');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}