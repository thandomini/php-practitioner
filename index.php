<?php
// $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo;port=8888', 'root');
// var_dump($pdo);

/*try{
    echo 'Connecting';
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=mytodo;', 'root', '');
    echo 'connected';
} catch(PDOException $e){
    die('could not connect.');
}

// require 'index.view.php';

// phpinfo(); 
?>*/

class Task{
    protected $description;

    protected $completed = false;

    public function __construct($description){
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function getDescription(){
        return $this->description;
    }

    public function isComplete(){
        return $this->completed;
    }

}

$tasks = [
    new Task('Finish this flippen tutorial'),
    new Task('Finish the microservices tutorial as well'),
    new Task('Set a study time table')
];

$tasks[1]->complete();

// $task->complete();

// dd($task);
require 'index.view.php';