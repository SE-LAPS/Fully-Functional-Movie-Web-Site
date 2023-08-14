<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <title>Add Movie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/fontawesome.min.css">
</head>
<body id="bigContainer">
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "phpmyadmin";

    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query = "SELECT * FROM movie";
    $result = $connection->query($query);
    ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Side Bar -->
            <div class="col-md-3 col-lg-2">
                <!----------------------For the Side Bar--------------------->
            </div>
            <!--------------------------------------------------------------------------------------------------------------------------------->
            <div class="col-md-9 col-lg-10">
                <div class="row">
                    <div class="col">
                        <div class="container-fluid" id="container" style="width: 100%;">
                            <div class="row">
                                <div class="col-sm">
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Movie ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Release Year</th>
                                                <th scope="col">Director</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Loop through the result set and display the data
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<th scope='row'>" . $row['movie_id'] . "</th>";
                                                    echo "<td>" . $row['title'] . "</td>";
                                                    echo "<td>" . $row['description'] . "</td>";
                                                    echo "<td>" . $row['release_year'] . "</td>";
                                                    echo "<td>" . $row['director'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='5'>No records found</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------Scripts----------------->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
    // Close the database connection
    $connection->close();
    ?>
</body>
</html>
