<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="StyleSheet.css">
        <title>Edit Movie</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/fontawesome.min.css">
        <style>
            body{
                background-color: #212121;
            }

            h2{
                color:#B20A10;
                text-align: center;
            }



        </style>
    </head>
    <body>
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "phpmyadmin";

        $connection = new mysqli($host, $username, $password, $database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Get the movie_id from the query parameter
        $movie_id = $_GET['movie_id'];

        // Retrieve the movie details based on the movie_id
        $query = "SELECT * FROM movie WHERE movie_id = $movie_id";
        $result = $connection->query($query);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $title = $row['title'];
            $description = $row['description'];
            $release_year = $row['release_year'];
            $director = $row['director'];
        } else {
            // Handle error when no or multiple records are found
            echo "Error: Unable to retrieve movie details.";
        }

        // Handle form submission for updating movie details
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newTitle = $_POST['title'];
            $newDescription = $_POST['description'];
            $newReleaseYear = $_POST['release_year'];
            $newDirector = $_POST['director'];

            // Update the movie details in the database
            $updateQuery = "UPDATE movie SET title = '$newTitle', description = '$newDescription', release_year = '$newReleaseYear', director = '$newDirector' WHERE movie_id = $movie_id";
            if ($connection->query($updateQuery)) {
                echo "Movie details updated successfully.";
            } else {
                echo "Error updating movie details: " . $connection->error;
            }
        }
        ?>

        <div class="container">
            <h2>Edit Movie Details</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"><?php echo $description; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="release_year">Release Year:</label>
                    <input type="text" class="form-control" id="release_year" name="release_year" value="<?php echo $release_year; ?>">
                </div>
                <div class="form-group">
                    <label for="director">Director:</label>
                    <input type="text" class="form-control" id="director" name="director" value="<?php echo $director; ?>">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: red;">Update</button>

            </form>
        </div>

        <div class="back">
            <button><a href="main.php"><img src="back.png"></a></button></div>
        <?php
        $connection->close();
        ?>
    </body>
</html>

