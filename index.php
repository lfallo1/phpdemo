<?php
//Load superhero list
require_once 'databases/db_connection.php';
$superheroes = get_superheroes();

//generate some bogus variables
$title = 'Welcome to the homepage';
$username = 'lfallo1';
$welcome = "{$title}, {$username}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src='bower_components/bootstrap/dist/js/bootstrap.min.js'></script>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <meta charset="UTF-8">
    <title>PHP- OOP Intro</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1><? echo $welcome ?></h1>
        <p>...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Alias</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <!--START LIST OF SUPERHEROES-->
            <?php
            foreach($superheroes as $s){ 
            ?>
            <tr>
                <td><? echo $s->get_alias() ?></td>
                <td><? echo $s->get_first_name() . ' ' . $s->get_last_name() ?></td>
            </tr>
            <?php } ?>
            <!--END LIST OF SUPERHEROES-->
        </tbody>
    </table>
</body>
</html>