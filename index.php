<?php
require('functions.php');
try{
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
} catch (PDOException $e){
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

dd($results[0]->description);

require 'index.view.php';