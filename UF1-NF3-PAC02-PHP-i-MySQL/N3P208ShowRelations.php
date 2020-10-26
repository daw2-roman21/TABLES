<?php
// connect to mysqli
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'SELECT m.movie_name,p.people_fullname FROM movie m, people p 
        WHERE (m.movie_leadactor = p.people_id) 
';
$query2 = 'SELECT p.people_fullname FROM movie m, people p
        WHERE m.movie_director = p.people_id';

$result = mysqli_query($db,$query) or die(mysqli_error($db));
$result2 = mysqli_query($db,$query2) or die(mysqli_error($db));

echo '<table border="1" style="float:left">';
echo '<tr><td>Nom pelicula</td><td>Nom Actor Principal</td></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<table border ="1" style="float:left">';
echo '<tr><td>Director</td></tr>';
while ($row = mysqli_fetch_assoc($result2)) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>