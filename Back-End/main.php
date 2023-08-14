<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="StyleSheet.css">
    <title>Admin Board</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body id="bigContainer">
    <!--------------------------Header------------------------>
    <nav class="navbar navbar-light sticky-top"  id="nav">
    <a class="navbar-brand" href="movieList.php" id="h1">
        <img src="images/Movie_Logo.png" width="60" height="30" class="d-inline-block align-top" alt="">
      &nbsp; Flim Mania
    </a>
        <button type="button" href="../User/Login.php" class="btn" id="logoutBtn" style="background-color: #E50914; font-size: 13px; color: white;">
            <a href="../User/Login.php" style="color:white;">Log out</a>
        </button>
    </nav>
    <!----------------------Header Finishes------------------------>
    
<centre>
    <div class="container-fluid">
        <div class="row">
            <!-- Side Bar -->
            <div class="col-md-3 col-lg-2" id="sidebar">
                <div class="sidebar">
                    <br>
                    <ul class="nav flex-column">
                        <!--Item 1-->
                        <li id="list" class="nav-item <?php if ((!isset($_GET['content']) && basename($_SERVER['PHP_SELF']) === 'main.php') || (isset($_GET['content']) && $_GET['content'] === 'movieList')) echo 'active'; ?>">
                            <a class="nav-link" href="?content=movieList">Movie List</a>
                        </li>
                        <!--Item 2-->
                        <li id="list" class="nav-item <?php if (isset($_GET['content']) && $_GET['content'] === 'userList') echo 'active'; ?>">
                            <a class="nav-link" href="?content=userList">Users list</a>
                        </li>
                        <!--Item 3-->
                        <li id="list" class="nav-item <?php if (isset($_GET['content']) && $_GET['content'] === 'movieAdd') echo 'active'; ?>">
                            <a class="nav-link" href="?content=movieAdd">Add Movie</a>
                        </li>
                        <!--Item 4-->
                        <li id="list" class="nav-item <?php if (isset($_GET['content']) && $_GET['content'] === 'createUserAcc') echo 'active'; ?>">
                            <a class="nav-link" href="?content=createUserAcc">Create User Account</a>
                        </li>
                        <!--Item 5-->
                        <li id="list" class="nav-item" <?php if (isset($_GET['content']) && $_GET['content'] === 'transDetails') echo 'active'; ?>">
                            <a class="nav-link" href="?content=transDetails">Transaction Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-9 col-lg-10" style="margin-left: 15px;">
                
               <?php
                    $current_page = $_SERVER['PHP_SELF'];
                    $active_class = '';

                    if (basename($current_page) === 'main.php') {
                        $active_class = 'active';
                    }
    
    
                    if (isset($_GET['content'])) {
                        $content = $_GET['content'];
                        if ($content === 'movieAdd') {
                            include './movieAdd.php';
                        }
                        
                        elseif ($content === 'userList') {
                            include './userList.php';
                        }
                        
                        elseif ($content === 'movieList') {
                            include './movieList.php';
                        }
                        
                        elseif ($content === 'createUserAcc'){
                            include './createUserAcc.php';
                        }
                        elseif ($content === 'transDetails'){
                            include './transDetails.php';
                        }
                    }
                    ?>

            </div>
        </div>
    </div>
    </centre>
    <!------------------Scripts----------------->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
