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
        <li>
            <strong>Name: </strong> <?= $tasks['title']; ?>
        </li>

        <li>
            <strong>Due Date: </strong> <?= $tasks['due']; ?>
        </li>

        <li>
            <strong>Assigned To: </strong> <?= $tasks['assigned_to']; ?>
        </li>

        <li>
            <!-- ternary operator isn't so good if we want to display some special html tags so reverting to the long way of doing this -->
            <!-- <strong>Status: </strong> <?= $tasks['completed'] ? 'Finished' : 'Incomplete' ?> -->
            
            <strong>Status: </strong>
            <?php  if ($tasks['completed']) : ?>
                <span class="icon">&#9989</span>
            <?php else: ?>
                <span class="icon">&#x2715</span>
            <?php endif; ?>
        </li>

        
    </ul>
</body>
</html>