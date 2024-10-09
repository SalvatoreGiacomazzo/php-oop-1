<?php
include_once __DIR__ . '/Movies.php';
/*
var_dump($americanHistoryX->printInfo());
var_dump($laHaine->printInfo());
var_dump($eva->printInfo());
var_dump($fantozzi->printInfo());
*/

$movies = [
    $americanHistoryX,
    $laHaine,
    $eva,
    $fantozzi
];

//var_dump($movies);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="row">

            <div class="col-6 mb-4">
                <h5>list</h5>
                <ul class="list-group">
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                </ul>
            </div>


            <div class="col-6 mb-4">
                <h5>list</h5>
                <ul class="list-group">
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                </ul>
            </div>
        </div>

        <div class="row">

            <div class="col-6 mb-4">
                <h5>list</h5>
                <ul class="list-group">
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                </ul>
            </div>


            <div class="col-6 mb-4">
                <h5>list</h5>
                <ul class="list-group">
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                    <li class="list-group-item">testing</li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>