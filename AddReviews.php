<?php
//connect to mysqlii
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

// make sure you're using the right database
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    
    (3, "2008-09-23", "Alex Roman", "Esta guapa la verdad", 4),
    (3, "2008-09-23", "Steven", "Malardaaaaaaa.", 1),
    (3, "2008-09-23", "Martin", "Ok I guess.", 3)
ENDSQL;
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';
?>
