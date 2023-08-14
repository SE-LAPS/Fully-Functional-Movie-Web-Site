<!DOCTYPE html>
<html lang="en">
<head>
<title>Categorize</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body {
        background-color: #111;
    }
    
    .container {
        max-width: 1500px;
        margin-top: 10px;
    }
    
    .w3-display-container {
        text-align: center;
    }
    
    .w3-image {
        width: 1200px;
        height: 300px;
    }
    
    .w3-display-middle {
        padding: 10px;
        border: 5px solid ;
        width: 200px;
        color: black;
        background-color:#ff3300;
    }
    
    .w3-button {
        background-color:yellow;
        
    }
    
    .w3-display-bottommiddle {
        position: absolute;
        bottom: -10px;
    }
    
    .w3-hide-small {
        display: none;
    }
  .container a {
    color: black;
    text-decoration: none;
    font-weight: bold;
}
</style>
</head>
<body>
    
     <?php
    // Include the navigation bar
    include 'nav.php'; 
    ?>

<!-- Header 1 -->
<div class="container">
    <header class="w3-display-container w3-content w3-center">
        <img class="w3-image" src="english.png" alt="Me">
        <div class="w3-display-middle">
            <a href="#" class="w3-bar-item ">English Movies</a>
        </div>
    </header>
</div>

<br>

<!-- Header 2 -->
<div class="container">
    <header class="w3-display-container w3-content w3-center">
        <img class="w3-image" src="korean.png" alt="Me">
        <div class="w3-display-middle ">
            <a href="#" class="w3-bar-item ">Korean Movies</a>
        </div>
    </header>
</div>

<br>

<!-- Header 3 -->
<div class="container">
    <header class="w3-display-container w3-content w3-center">
        <img class="w3-image" src="bollywood.png" alt="Me">
        <div class="w3-display-middle">
            <a href="#" class="w3-bar-item ">Bollywood Movies</a>
        </div>
    </header>
</div>

<!-- End page content -->
</body>
</html>
