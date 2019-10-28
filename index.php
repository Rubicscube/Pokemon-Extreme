<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


//FETCH THE API JSON FILE for the given ID or name

for ($i = 1; $i <= 20; $i++){
$url = "https://pokeapi.co/api/v2/pokemon/$i";
$data = file_get_contents($url);
$pokemon = json_decode($data);


    $datatemplate = array (

        '<div class="container">
        <div class="pokedex">
    
    <div class="card mb-4">'.$id = $pokemon->id,
        '<img class="card-image" src="'.$pokemon->sprites->front_default.'"/>',
        '<div class="card-body"><h2 class="card-title">'.$pname = $pokemon->name.'</h2>',
        '<p class="card-subtitle">Type:'.$ptype = $pokemon->types[0]->type->name.'</p>'
            .'</div></div></div></div>'
    );

    echo implode($datatemplate);
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></head>
<body>

<div class="container">
    <div class="pokedex">
    </div>
</div>







<!--<form id="searchBox" method="post">
    <label>
        <input type="text" name="inpput" class="form-control" id="inpput" value="" placeholder="Poké Name">
    </label>
    <button id="search" type="submit"><i class="material-icons">search</i></button>
</form>



<div id="infoBox">
    <p id="name" value="">
        <?php
/*        echo "Name: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ID: $pokemon->id <br> Type: $type"; */?>
    </p>
    <div class="overflow-auto" id="move"><?php
/*        echo "Moves: <br> $move1 <br> $move2 <br> $move3 <br> $move4 <br>"; */?> </div>

</div>
<div id="displayBoxBg">
    <p id="prevEvo" data-placeholder="test"><?php
/*        echo "$evopokname"; */?></p>
    <div id="displayBox2">
        <img id="prevEvoImg" src="<?php
/*        echo "$evoimglinkfinal"; */?>" alt="no prev evolution">
    </div>
</div>


<form id="searchBox2" method="post">
    <button id="left" type="submit" value="<?php /*echo $id = $_POST['inpput']-1; */?>" name="inpput" ><</button>
</form>

<form id="searchBox3" method="post">
<button id="right" type="submit" value="<?php /*echo $id = $_POST['inpput']+1; */?>" name="inpput"> ></button>
</form>-->

</body>

</html>