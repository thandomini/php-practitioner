<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>practitioner</title>
</head>
<body>
    
    <ul>
        <?php foreach($person as $feature => $val) : ?>
            <li><?= $feature.' &ndash; '.$val; ?></li>
        <?php endforeach; ?> 
    </ul>
</body>
</html>