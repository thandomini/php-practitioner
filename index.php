<?php
require('functions.php');
require('Task.php');
require('database/Connection.php');
require('database/QuerryBuilder.php');


// try{
//    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
// } catch (PDOException $e){
//    die($e->getMessage());
// }

// $pdo = connectToDb();

$pdo = Connection::make();

// function fetchAllTasks($pdo){
//    $statement = $pdo->prepare('select * from todos');
//    $statement->execute();

//    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
// }

// $statement = $pdo->prepare('select * from todos');
// $statement->execute();
// $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

//  $tasks = fetchAllTasks($pdo);

$query = new QuerryBuilder($pdo);

$tasks = $query->selectAll('todos');

require 'index.view.php';