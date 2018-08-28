<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }            
    </style>
    
</head>
<body>
    
    <ul>
        <!-- a more ellegent way of representing html esp when there's a lot of complicated html to output. -->
        <?php foreach($names as $name) : ?>
            <li><?= $name; ?></li> 
            
        <?php endforeach; ?> 


        <br>
        <!-- a way to output html. this method is much better when there isn't too much or complicated html to render -->
        <?php  
            foreach($names as $name){
                echo "<li>".$name."</li>"; 
            }
        ?>
    </ul>
</body>
</html>