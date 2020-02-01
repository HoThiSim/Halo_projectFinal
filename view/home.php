<?php session_start();
$user = json_decode($_SESSION['account']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../model/style/main.min.css">
    <link rel="stylesheet" href="../model/style/icon-font.min.css">
    <link rel="stylesheet" href="../model/style/animate.css">
    <link rel="stylesheet" href="../model/style/hamburgers.min.css">
    <link rel="stylesheet" href="../model/style/animsition.min.css">
    <link rel="stylesheet" href="../model/style/select2.min.css">
    <link rel="stylesheet" href="../model/style/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../model/style/util.css">
    <link rel="stylesheet" type="text/css" href="../model/style/main.css">
    <script src="../model/js/main.min.js"></script>
    <title>Title</title>
</head>
<style>
    body {
        margin: 0;
        background-color: rgb(250, 219, 133);
    }
</style>
<script>
    function chooseIcon(icon) {
        document.getElementById("my-dropdown").innerHTML = icon;
        document.getElementById("emotion").value = icon;
    }
</script>
<style>

</style>

<body class="container-login100" style="background-image: url('../model/image/giphy.webp');height: 100%;  background-position: center;
  background-repeat:repeat;
  background-size: cover;">
    <!--header page-->
    <div class="limiter">
        <div>
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: orange;">
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="navbar-brand" href="#">
                                        <img style="width: 100px; height: 100px" src="<?php echo "../database/UserImg/" . $user->user->user_id . "/" . $user->user->user_avartar ?>" class="rounded-circle">
                                        <span style="color: white;font-size: 30px"><?php echo $user->user->user_name ?></span>
                                    </a>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                            </ul>
                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                            </ul>
                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                            </ul>
                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                            </ul>
                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                            </ul>
                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                            </ul>
                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                            </ul>

                            <img src="../model/image/halo.png" style="width: 300px; margin-right :400px" alt="">

                            <ul class="navbar-nav mr-auto mt-8 mt-lg-8">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fa fa-desktop " style=" margin-top: 7px; color: black;" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item"><i class="fa fa-user-plus" style="margin-top: 12px; margin-left:40px; color: black;" aria-hidden="true"></i>
                                    <a class="nav-link" href="#"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-bell" style="margin-top: 7px;margin-left:40px; color: black;" aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item"><i class="fa fa-envelope" style="margin-top: 12px;margin-left:40px; color: black;" aria-hidden="true"> </i>
                                    <a class="nav-link" href="#"></a>
                                </li>
                                <li class="nav-item"><i class="fa fa-cog" style="margin-top: 12px;margin-left:40px; color: black;" aria-hidden="true"> </i>
                                    <a class="nav-link" href="#"></a>
                                </li>
                            </ul>
                            <form action="../OOP/function/logout.php" method="post" style="margin-right: 20px">
                                <button type="submit" name="logout" class="btn btn-primary">Logout</button>
                            </form>
                            <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->

                        </div>
                    </nav>

                </div>
            </div>
            <!--header page-->

            <!--body page-->
            <div class="container">
                <div class="card">
                    <!--card-->
                    <?php require '../OOP/function/post.php' ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-header ">
                            <h5><b>Creat Post</b></h5>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <textarea style="width: 100%" class="_3en1 _480e navigationFocus" name="postContent" placeholder="What do you think?"></textarea>
                                </div>
                                <?php require '../OOP/function/uploadFile.php'; ?>
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; justify-content: space-between">
                            <div name="img" class="btn btn-primary" style="height: 40px; width: 100px;">
                                <label class="custom-file" style="">
                                    <span onclick="clickUpload()" class="custom-file-control fas fa-image text-warning "> Image</span>
                                    <input onchange="" type="file" name="imgToUpload" id="imgToUpload" placeholder="" class="custom-file-input">
                                    <button onclick="clickUploadOff()" id="clickUpload" name="uploadImg" type="submit" style="z-index: -100px ;display: none;position: absolute;width: 100px;left:-12px;top: -5px" class="btn btn-info">load</button>
                                </label>
                            </div>
                            <div class="dropdown">
                                <input type="text" hidden name="emotion" id="emotion" value="">
                                <button id="my-dropdown" name="" value="" style="width:200px; height: 40px" class="btn btn-primary dropdown-toggle fa fa-meh text-warning" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Emotion</button>
                                <div class="dropdown-menu " aria-labelledby="my-dropdown">
                                    <p class="dropdown-item btn btn-dark active" value="sad" onclick="chooseIcon('Sad')"><i class="fas fa-sad-cry text-warning"></i> sad</p>
                                    <p class="dropdown-item btn btn-dark active" value="happy" onclick="chooseIcon('Happy')"><i class="fa fa-heart text-warning" aria-hidden="true"></i> happy</p>
                                    <p class="dropdown-item btn btn-dark active" value="happy" onclick="chooseIcon('Angry')"><i class="fas fa-angry text-warning "></i>Angry</p>
                                    <p class="dropdown-item btn btn-dark active" value="happy" onclick="chooseIcon('Cold')"><i class="fas fa-cloud-rain text-warning "></i>Cold</p>
                                    <p class="dropdown-item btn btn-dark active" value="happy" onclick="chooseIcon('Busy')"><i class="fa fa-calendar text-warning" aria-hidden="true"></i> Busy</p>
                                    <p class="dropdown-item btn btn-dark active" value="happy" onclick="chooseIcon('Drowsy')"><i class="fa fa-bed text-warning" aria-hidden="true"></i> Drowsy</p>
                                </div>
                            </div>
                            <button type="submit" style="width:200px" class="btn btn-primary"> <i class="fas fa-user-friends text-warning   "> Tag </i></button>
                            <button type="submit" style="width:200px" class="btn btn-primary"><i class="fa fa-meh text-warning"> Other </i></button>
                            <button type="submit" style="width:200px" class="btn btn-success" name="ok"> <i class="fa fa-share text-warning" aria-hidden="true"> Post </i></button>


                        </div>
                    </form>
                </div>
                <!--.card-->
                <!--body header page-->
                <div class="" style="display: flex; justify-content: space-between; color: white ">
                    <h6>Instance Message</h6>
                    <h6>Display</h6>
                </div>
                <div class="card-columns">
                    <div class="card">
                        <img class="card-img-top" style="height: 200px" src="c.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Ryu Kun</h4>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" style="height: 200px" src="n.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Ann Nhien</h4>
                        </div>
                    </div>
                    <div class="card ">
                        <img class="card-img-top" style="height: 200px" src="m.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Ho Thi Sen</h4>
                        </div>
                    </div>
                </div>

                <?php require '../OOP/class_modal/Poster.classs.php';

                new Poster();




                ?>
                <!--.body header page-->

                <!-- 
        <div class="card">
            <div style="display: flex; flex-direction: row;">
                <img style="width: 70px" class="card-img-top" src="n.jpg" alt="">
                <h5 style=" margin-top: 30px">Ann Nhien</h5>
            </div>
            <p>Sau mỗi lần xem phim lãng mạn, em cảm thấy man mác buồn và muốn có người yêu. Vì thế, bây giờ em biết mình phải cẩn thận về những bộ phim như thế</p>
            <img style="width: 1000px; height: 500px" class="card-img-top" src="n.jpg" alt="">
            <div style=" display: flex;justify-content: space-between; ">
                <div style="display: flex;flex-direction: row; ">
                    
                    <h6 style=" margin-top: 30px">Hi and 700 people loved </h6>
                </div>
                <h6 style=" margin-top: 30px">Nam Anh and 800 people commented</h6>
                <h6 style=" margin-top: 30px">Nguyen Ha Lam and 10000 people shared</h6>
            </div>
            <div class="card-body" style="display: flex; justify-content: space-between;">
                <button type="submit" style="width:300px" class="btn btn-primary"> 
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>
                <button type="submit" style="width:300px" class="btn btn-primary"> 
                <i class="fa fa-comment" aria-hidden="true"></i> Comment</button>
                <button type="submit" style="width:300px" class="btn btn-primary"> 
                <i class="fa fa-share" aria-hidden="true"></i>Share</button>
            </div>
        </div> -->

            </div>

        </div>
    </div>
    <footer style="text-align: center; color: white">
        <br>
        <p style=" color: white">Copyright &copy; Ho Thi Sim
            <br>Nick Halo: Hí Anita
            <br>Phone Number: 0962105932
        </p>
    </footer>


    <!--.body page-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>