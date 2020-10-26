<?php
// connect to mysqli
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (4, "Pelicula Ejemplo 1", 9, 2017, 1, 2),
        (5, "Pelicula Ejemplo 2", 9, 2015, 2, 2),
        (6, "Pelicula Ejemplo 3", 10, 2018, 3, 3)';
mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9,"Genero Ejemplo 1"),
        (10, "Genero Ejemplo 2"), 
        (11, "Genero Ejemplo 3")
        ';
        
mysqli_query($db,$query) or die(mysqli_error($db));

$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Persona Ejemplo 1", 1, 0),
        (8, "Persona Ejemplo 2", 0, 1),
        (9, "Persona Ejemplo 3", 0, 1)
        ';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>