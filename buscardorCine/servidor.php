<?php

// echo "hola desde el servidor";

// echo  'Datos recibidos en el servidor: ' . ;

$c1 = $_GET['c1'];



$peliculas = array(
    'pelicula1' =>array(
    
        'ide_pel' => 1,
        'tit_pel' => 'Avatar',
        'dir_pel' => 'James Cameron',
        'pro_pel' => 'Sam Worthington',
        'ani_pel' => 2009
    ),
    'pelicula2' =>array(
        'ide_pel' => 2,
        'tit_pel' => 'Avengers',
        'dir_pel' => 'Anthony Russo',
        'pro_pel' => 'Chris Evans',
        'ani_pel' => 2019
    ),
    'pelicula3' =>array(
        'ide_pel' => 3,
        'tit_pel' => 'Black Panther',
        'dir_pel' => 'Ryan Coogler',
        'pro_pel' => 'Chadwick Boseman',
        'ani_pel' => 2018
    )
);

foreach ($peliculas as $pelicula)
{
    if($c1==$pelicula['tit_pel']){
        echo "<spam> ". 'Pelicula: '.$pelicula['ide_pel'] . " </spam>";
        echo "<spam> ". ' '.$pelicula['tit_pel'] . " </spam>";
        echo "<spam> ". ' '.$pelicula['dir_pel'] . " </spam>";
        echo "<spam> ". ' '.$pelicula['pro_pel'] . " </spam>";
        echo "<spam> ". ' '.$pelicula['ani_pel'] . " </spam>";
    }
    /*
    // echo $pelicula['ide_pel'];    # code...
    echo 'Pelicula: '.$value['tit_pel'];
    echo '<br>';   # code...;
    echo 'Director: '.$value['dir_pel'];
    echo '<br>';   # code...;
    echo 'Productor: '.$value['pro_pel'];
    echo '<br>';   # code...;
    echo 'Año: '.$value['ani_pel'];
    echo '<br>';   # code...;
    echo '<br>';   # code...;*/
}



?>