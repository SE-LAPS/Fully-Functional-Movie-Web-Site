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
                    <div class="container-fluid" id="container"  style="width: 100%;">
                        <div class="row">
                        <div class="col-sm">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <h3 style="color: white;">Add Movie</h3>
                                <table style="border-spacing: 30px;">
                                    <tr>
                                        <!---------------Movie name Input------------------>
                                        <td colspan="2">
                                            <input class="form-control form-control-sm" type="text" placeholder="Title" aria-label=".form-control-sm example">
                                        </td>
                                        <!---------------Movie Video Input------------------>
                                        <td rowspan="4">
                                            <div class="input-group mb-3">
                                                <div class="square-video-input">
                                                <input type="file" accept="video/*" id="videoInput" onchange="updateFileName()">
                                                <label class="square-video-input-label" id="fileNameLabel">
                                                    <?php
                                                    if (isset($_FILES['videoInput'])) {
                                                        echo $_FILES['videoInput']['name'];
                                                    } else {
                                                        echo 'Choose a video file';
                                                    }
                                                    ?>
                                                </label>
                                            </div>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <!--------------------Movie Image Input----------------------->
                                            <div class="input-group mb-3">
                                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-------------------Movie category------------------------------>
                                    <tr>
                                        <td>
                                            <div class="dropdown">
                                                <select name="cars" id="cars" class="btn btn-secondary dropdown-toggle">
                                                    <option value="Action">Action</option>
                                                    <option value="Comedy">Comedy</option>
                                                    <option value="Drama">Drama</option>
                                                    <option value="Romance">Romance</option>
                                                    <option value="Thriller">Thriller</option>
                                                    <option value="Horror">Horror</option>
                                                    <option value="Scfi">Science Fiction</option>
                                                    <option value="Fantasy">Fantasy</option>
                                                    <option value="Animation">Animation</option>
                                                    <option value="Documentary">Documentary</option>
                                                </select>
                                              </div>
                                        </td>
                                    <!-----------------------Video Quality------------------------------------->
                                        <td>
                                            <div class="dropdown">
                                                <select name="cars" id="cars" class="btn btn-secondary dropdown-toggle">
                                                    <option value="fullHD">Full HD</option>
                                                    <option value="1080p">1080p</option>
                                                    <option value="720p">720p</option>
                                                    <option value="480p">480p</option>
                                                    <option value="360p">360p</option>
                                                    <option value="240p">240p</option>
                                                    <option value="144p">144p</option>
                                                </select>
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px; resize: none; "></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <button type="submit" class="btn" id="" style="background-color: #009933; font-size: 13px; color: white;">
                                                Add
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                                
                            </form>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>      
  </div>
</div> 
<div class="back">
    <button><a href="main.php"><img src="back.png"></a></button></div>
    
    <!------------------Scripts----------------->
    <script>
        function updateFileName() {
            var input = document.getElementById('videoInput');
            var label = document.getElementById('fileNameLabel');
            if (input.files.length > 0) {
                label.textContent = input.files[0].name;
            } else {
                label.textContent = 'Choose a video file';
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


