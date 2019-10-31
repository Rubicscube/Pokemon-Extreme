<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="css/style.css">

    <title>Pokémon Extreme</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="pokedex">
        <form method="post">
            <div class="row">
                <div class="col">
                    <label>pokémon type</label>
                    <select name="type" class="form-control md-3">
                        <option value="all">all</option>
                        <option value="grass">Grass</option>
                        <option value="poison">Poison</option>
                        <option value="normal">Normal</option>
                        <option value="electric">Electric</option>
                    </select>
                </div>
                <div class="col">
                    <label>No. of pokémon to show</label>
                    <select name="dropdownvalue" class="form-control md-3">
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="807">807 takes 2 mins to load</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit" name="submit"> apply</button>
            </div>
        </form>
    </div>
</div>


<?php
$contoshow = $_POST['dropdownvalue'];


if (isset($_POST['dropdownvalue'])) {

    echo '<div class="container-fluid">
        <div class="row">';


    for ($i = 1; $i <= $contoshow; $i++) {
        $url = "https://pokeapi.co/api/v2/pokemon/$i";
        $data = file_get_contents($url);
        $pokemon = json_decode($data);


        $datatemplate = array(

            '<div class="col-md-3"><a href="https://pokeapi.co/api/v2/pokemon/' . $pokemon->id . '">
             <div class="card mb-4">' . $id = $pokemon->id,
            '<img class="card-image" src="' . $pokemon->sprites->front_default . '"/>',
            '<div class="card-body"><h2 class="card-title">' . $pname = $pokemon->name . '</h2>',
            '<p class="card-subtitle">Type: ' . $ptype = $pokemon->types[0]->type->name . '</p></a></div></div></div>'
        );

        echo implode($datatemplate);


    }
    echo '</div></div>';
}

?>




















<nav aria-label="Page navigation example" class="pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
</body>
</html>