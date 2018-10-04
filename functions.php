<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function leagalAge($age)
{
    if ($age >= 16) {
        echo 'You may enter';
    } elseif ($age < 16) {
        echo 'You are too young to be clubbing';
    }

    function fetchAllTasks($pdo)
    {
        $statement = $pdo->prepare('select * from todos');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    }

}
