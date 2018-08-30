<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>practitioner</title>
</head>
<body>
    <h1>Tasks for the day</h1>
    <ul>
        <?php foreach($tasks as $task => $val) : ?>
            <li><?='<strong>'. ucfirst($task).'</strong> &ndash; '.$val; ?></li>
        <?php endforeach; ?> 
    </ul>
</body>
</html>