<?php
// require 'functions.php';

class Task{
    public $description;
    public   $completed = false;

    public function __construct($description){
        // Automatically triggered on instantiation

        $this->description = $description;
    }

    public function isComplete(){
        return $this->completed;
    }

    public function complete(){
        $this->completed = true;
    }
    
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish this tutorial'),
    new Task('Prepare for the braai')
];

$tasks[0]->complete();

// dd($tasks);

// $task->complete();
//var_dump($task->isComplete());
// var_dump($task->isComplete());
// $task->complete();
// dd($task);

require 'index.view.php';