<?php
require_once __DIR__ ."/models/Movie.php";

$movie1 = new Movie("Nope", "horror");
$movie1-> durata = 100;
$movie1-> lingua = "Inglese";
$movie1-> annoDiUscita = 2022;
$movie1-> calcolaAnniUscita();

var_dump($movie1);

$movie2 = new Movie("Nemo", "animazione");
$movie2-> durata = 105;
$movie2-> annoDiUscita = 2003;
var_dump($movie2)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Film</h1>
                <div><?php echo $movie1->titolo ?></div>
                <div><?php echo $movie1->annoDiUscita ?></div>
                <div><?php echo $movie2->titolo ?></div>
                <div><?php echo $movie2->annoDiUscita ?></div>
        </div>
    </main>
</body>
</html>