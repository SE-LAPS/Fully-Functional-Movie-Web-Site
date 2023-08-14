<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "phpmyadmin";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_GET['movie_id'])) {
    $movie_id = $_GET['movie_id'];

    // Perform the DELETE query
    $deleteQuery = "DELETE FROM movie WHERE movie_id = $movie_id";
    if ($connection->query($deleteQuery)) {
        echo "Movie removed successfully.";
    } else {
        echo "Error removing movie: " . $connection->error;
    }
} else {
    echo "Movie ID parameter is missing.";
}

$connection->close();
?>
