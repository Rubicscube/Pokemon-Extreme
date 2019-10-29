<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


//FETCH THE API JSON FILE for the given ID or name


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
    <div class="card mb-4 bg-warning">' . $id = $pokemon->id,
            '<img class="card-image" src="' . $pokemon->sprites->front_default . '"/>',
            '<div class="card-body"><h2 class="card-title">' . $pname = $pokemon->name . '</h2>',
            '<p class="card-subtitle">Type: ' . $ptype = $pokemon->types[0]->type->name . '</p></a></div></div></div>'
        );

        echo implode($datatemplate);



    }
   echo '</div></div>';
}


foreach ($datatemplate as $entry) {
    if ($entry->id  == 4)
        echo "test";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="css/style.css">

    <title>Pokedex</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="pokedex">


        <form method="post">

            <select name="type">
                <option value="all">all</option>
                <option value="grass">Grass</option>
                <option value="poison">Poison</option>
                <option value="normal">Normal</option>
                <option value="electric">Electric</option>
            </select>


            <select name="dropdownvalue">
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="807">807 takes 3 mins to load</option>
            </select>
            <button type="submit" name="submit"> apply</button>


        </form>
    </div>
</div>

</body>

</html>