<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la API</title>
</head>
<body>

<!-- Mostrar tabla para leer_ratings -->
<h2>Resultados de leer_ratings</h2>
<?php
// Hacer la solicitud al API
$response_leer_ratings = file_get_contents('http://api:5000/api/leer_ratings');

// Decodificar el JSON
$data_leer_ratings = json_decode($response_leer_ratings, true);

// Verificar si la decodificación fue exitosa
if ($data_leer_ratings !== null) {
    // Mostrar los datos en una tabla
    echo '<table border="1"><tr>';
    $headers = array_keys($data_leer_ratings[0]);
    foreach ($headers as $header) {
        echo '<th>' . htmlspecialchars($header) . '</th>';
    }
    echo '</tr>';

    foreach ($data_leer_ratings as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>Error al decodificar el JSON.</p>';
}
?>
<!-- Mostrar tabla para leer_links -->
<h2>Resultados de leer_links</h2>
<?php
$response_leer_links = file_get_contents('http://api:5000/api/leer_links');
$data_leer_links = json_decode($response_leer_links, true);

if ($data_leer_links !== null) {
    echo '<table border="1"><tr>';
    $headers_links = array_keys($data_leer_links[0]);
    foreach ($headers_links as $header) {
        echo '<th>' . htmlspecialchars($header) . '</th>';
    }
    echo '</tr>';

    foreach ($data_leer_links as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>Error al decodificar el JSON de leer_links.</p>';
}
?>

<!-- Mostrar tabla para leer_movies -->
<h2>Resultados de leer_movies</h2>
<?php
$response_leer_movies = file_get_contents('http://api:5000/api/leer_movies');
$data_leer_movies = json_decode($response_leer_movies, true);

if ($data_leer_movies !== null) {
    echo '<table border="1"><tr>';
    $headers_movies = array_keys($data_leer_movies[0]);
    foreach ($headers_movies as $header) {
        echo '<th>' . htmlspecialchars($header) . '</th>';
    }
    echo '</tr>';

    foreach ($data_leer_movies as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>Error al decodificar el JSON de leer_movies.</p>';
}
?>

<!-- Mostrar tabla para leer_tags -->
<h2>Resultados de leer_tags</h2>
<?php
$response_leer_tags = file_get_contents('http://api:5000/api/leer_tags');
$data_leer_tags = json_decode($response_leer_tags, true);

if ($data_leer_tags !== null) {
    echo '<table border="1"><tr>';
    $headers_tags = array_keys($data_leer_tags[0]);
    foreach ($headers_tags as $header) {
        echo '<th>' . htmlspecialchars($header) . '</th>';
    }
    echo '</tr>';

    foreach ($data_leer_tags as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>Error al decodificar el JSON de leer_tags.</p>';
}
?>



<!-- Repetir para los demás endpoints -->

</body>
</html>
