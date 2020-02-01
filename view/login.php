<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body style="background-size: 100%;background-color: #ade7ba;">
    <div class=" container-fluid ">
        <nav class="navbar navbar-expand-sm navbar-dark " style="background-color: rgb(57, 228, 57); ">
            <a class="navbar-brand " href="# ">Name</a>
            <button class="navbar-toggler d-lg-none " type="button " data-toggle="collapse " data-target="#collapsibleNavId " aria-controls="collapsibleNavId " aria-expanded="false " aria-label="Toggle navigation "></button>
            <div class="collapse navbar-collapse " id="collapsibleNavId " style="margin-left: 40%; ">
                <form class="form-inline my-2 my-lg-0 " action="home.php" method="POST">
                    <div class="form-group ">
                        <label for=" "><i class="text " style="font-family: Verdana, Geneva, Tahoma; color: rgb(124, 16, 212);font-size: 20px; margin: 30px; ">User name</i></label>
                        <input type="text " class="form-control " name="accountName " id="accountName " aria-describedby="helpId " placeholder=" ">
                        <label for=" "><i style="font-family: Verdana, Geneva, Tahoma; color: rgb(124, 16, 212); font-size: 20px;; margin: 30px; ">Password</i></label>
                        <input type="password " class="form-control " name="accountPassword " id="accountPassword " aria-describedby="helpId " placeholder=" ">
                        <input name="login" id=" " type="submit" class="btn btn-primary " type="button " value="login" style="margin: 30px; ">
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js "></script>
</body>

</html