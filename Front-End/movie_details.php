<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <style>
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php include "nav.php" ?>

    <!-- Trailer Section -->
    <div class="row mt-0">
        <div class="col-md-12">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/QS2UPxj_Y9w" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="container mt-5">
        <!-- Black Box for Movie Poster and Details -->
        <div class="p-4 rounded" style="background-color: #000;">
            <div class="movie-details">
                <div class="row">
                    <div class="col-md-4">
                        <img src="Images/movie_poster1.jpg" alt="Movie Poster" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h1 class="mb-4">Sita Ramam (2022)</h1>
                        <h2>Overview</h2>
                        <br>
                        <p>Upon returning to Pakistan, Afreen sets off to fulfil her grandfather's wish of delivering a letter from Ram to Sita.
                            Along the way, she finds Ram and learns about their love story.</p>
                        <br>
                        <p><i class="fas fa-calendar-alt"></i> <strong>Release Date:</strong> August 5, 2022</p>
                        <p><i class="fas fa-film"></i> <strong>Genre:</strong> Romance, Historical</p>
                        <p><i class="fas fa-user"></i> <strong>Director:</strong> Hanu Raghavapudi</p>

                        <p><i class="fas fa-star"></i> <strong>Rating:</strong> 4.5/5</p>
                        <p><i class="fas fa-clock"></i> <strong>Duration:</strong> 2h 43min</p>
                        <br>
                        <a href="#" class="btn btn-primary ">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cast Section -->
        <h2 class="top-cast-heading mt-5">Meet the Cast</h2>
        <div class="row mt-3 justify-content-center">
            <div class="card col-2 mx-1">
                <img class="card-img-top" src="Images/act1.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Actor Name</h5>
                </div>
            </div>
            <div class="card col-2 mx-1">
                <img class="card-img-top" src="Images/act1.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Actor Name</h5>
                </div>
            </div>
            <div class="card col-2 mx-1">
                <img class="card-img-top" src="Images/act1.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Actor Name</h5>
                </div>
            </div>
            <div class="card col-2 mx-1">
                <img class="card-img-top" src="Images/act1.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Actor Name</h5>
                </div>
            </div>
            <div class="card col-2 mx-1">
                <img class="card-img-top" src="Images/act1.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Actor Name</h5>
                </div>
            </div>
        </div>

        <!-- Recommendations Section -->
        <h2 class="recommendations-heading mt-5">You Would Like</h2>
        <div class="row mt-3 mb-5 justify-content-center">
            <div class="card col-3 mx-1">
                <img class="card-img-top" src="Images/rec1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Movie Name</h5>
                </div>
            </div>
            <div class="card col-3 mx-1">
                <img class="card-img-top" src="Images/rec1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Movie Name</h5>
                </div>
            </div>
            <div class="card col-3 mx-1">
                <img class="card-img-top" src="Images/rec1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Movie Name</h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>