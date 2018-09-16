<?php
require('Task.php');
require('functions.php');

try{
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
} catch (PDOException $e){
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';