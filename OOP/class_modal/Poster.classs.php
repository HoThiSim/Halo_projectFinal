<?php
class Poster
{
    public $pos_id;
    public $pos_content;
    public $pos_date;
    public $pos_image;
    public $connection;

    function __construct()
    {
        $this->plusLike();
        $this->load();
    }

    function plusLike()
    {
        if (isset($_POST['like'])) {
            require_once '../database/config.php ';
            $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            $stm = 'UPDATE notification set tus_like=tus_like+1 where not_id=' . $_POST['like'];
            $this->connection->query($stm);
        }
    }

    function load()
    {
        require_once '../database/config.php ';
        $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $stm = 'SELECT * FROM notification ';
        $data = $this->connection->query($stm)->fetch_all();
        $this->connection->close();
        if ($data) {
            for ($i = count($data) - 1; $i >= 0; $i--) {
                $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                $userAvatar =
                    $this->connection->query('SELECT user_avatar,user_name,user_id from user where user_id=' . $data[$i][3])->fetch_all();
                $this->connection->close();
                echo '<div class="card">';
                echo '<div style="display: flex; flex-direction: row;">';
                echo '<img style="width: 70px"  class="card-img-top" src="../database/UserImg/' . $userAvatar[0][2] . '/' . $userAvatar[0][0] . '" alt="">';
                echo '<h5 style=" margin-left: 30px ;font-size: 30px">' . $userAvatar[0][1] . '</h5>';
                if ($data[$i][6] == 'Sad') {
                    echo '<p style="margin-left:  30px;font-size: 20px"> is fealling ' . $data[$i][6] . ' <i class="fas fa-sad-cry text-warning"></i></p>';
                }
                if ($data[$i][6] == 'Happy') {
                    echo '<p style="margin-left:  30px ;font-size: 20px"> is fealling ' . $data[$i][6] . '<i class="fa fa-heart text-warning"></i></p>';
                }
                if ($data[$i][6] == 'Angry') {
                    echo '<p style="margin-left:  30px ;font-size: 20px"> is fealling ' . $data[$i][6] . '<i class="fas fa-angry text-warning"></i></p>';
                }
                if ($data[$i][6] == 'Cold') {
                    echo '<p style="margin-left:  30px ;font-size: 20px"> is fealling ' . $data[$i][6] . '<i class=" fas fa-cloud-rain text-warning"></i></p>';
                }
                if ($data[$i][6] == 'Busy') {
                    echo '<p style="margin-left:  30px ;font-size: 20px "> is fealling ' . $data[$i][6] . '<i class=" fa fa-calendar text-warning"></i></p>';
                }
                if ($data[$i][6] == 'Drowsy') {
                    echo '<p style="margin-left:  30px ;font-size: 20px"> is fealling ' . $data[$i][6] . '<i class=" fa fa-bed text-warning"></i></p>';
                }
                echo '<p style="margin-left: 50% ;font-size: 20px">' . $data[$i][2] . '</p>';
                echo '</div>';

                echo '<p style=" text-align: center ;font-size: 25px">' . $data[$i][1] . '</p>';
                if ($data[$i][4] != '') {
                    echo '<img style="width: 800px; height: 500px;margin: 10px auto;" 
                class="card-img-top" src="../database/UserImg/' . $data[$i][3] . '/' . $data[$i][4] . '" alt="">';
                }
                echo '<div style=" display: flex;justify-content: space-between; ">';
                echo '<div style="display: flex;flex-direction: row; ">';
                echo '<h6 style=" margin-top: 30px; margin-left: 30px">' . $data[$i][5] . ' people loved </h6>';
                echo ' </div >';
                echo '<h6 style=" margin-top: 30px">Nam Anh and 800 people commented</h6>';
                echo '<h6 style=" margin-top: 30px;margin-right: 30px">Nguyen Ha Lam and 10000 people shared</h6>';
                echo '</div> ';
                echo '<div class="card-body" style="display: flex; justify-content: space-between;">';
                echo '<form action="" method="post">';
                echo '<button type="submit" style="width:300px;margin-left: 30px " name="like" value="' . $data[$i][0] . '" class="btn btn-primary">
                  <i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>';
                echo '<button type="submit" style="width:300px; margin-left: 30px" class="btn btn-primary">
                 <i class="fa fa-comment" aria-hidden="true"></i> Comment</button>';
                echo '<button type="submit" style="width:300px ; margin-left: 30px" class="btn btn-primary">
                 <i class="fa fa-share" aria-hidden="true" value="' . $data[$i][0] . '" name="share"></i>Share</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            }
        }
    }

    // function share()
    // {
    //     if (isset($_POST['share'])) {
    //         require_once '../database/config.php ';
    //         $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    //         $stm = 'SELECT * FROM notification where not_id=' . $_POST['share'];
    //         $post = $this->connection->query($stm)->fetch_all();
    //         if ($stm) {
    //             echo '<script>alert("shared")</script>';
    //             $userAvatar =
    //                 $this->connection->query('SELECT user_avatar,user_name,user_id from user where user_id=' . $data[$i][3])->fetch_all();
    //             $this->connection->close();
    //             echo '<div class="card">';
    //             echo '<div style="display: flex; flex-direction: row;">';
    //             echo '<img style="width: 70px"  class="card-img-top" src="../database/UserImg/' . $userAvatar[0][2] . '/' . $userAvatar[0][0] . '" alt="">';
    //             echo '  <h5 style=" margin-left: 30px">' . $userAvatar[0][1] . '</h5>';
    //             echo '<p style="margin-left: 70%">' . $data[$i][2] . '</p>';
    //             echo '</div>';
    //             echo '<p style=" text-align: center">' . $data[$i][1] . '</p>';
    //             if ($data[$i][4] != '') {
    //                 echo '<img style="width: 1000px; height: 500px;margin: 10px auto;" 
    //             class="card-img-top" src="../database/UserImg/' . $data[$i][4] . '" alt="">';
    //             }
    //             echo '<div style=" display: flex;justify-content: space-between; ">';
    //             echo '<div style="display: flex;flex-direction: row; ">';

    //             echo '<h6 style=" margin-top: 30px">' . $data[$i][5] . ' people loved </h6>';
    //             echo ' </div >';
    //             echo '<h6 style=" margin-top: 30px">Nam Anh and 800 people commented</h6>';
    //             echo '<h6 style=" margin-top: 30px">Nguyen Ha Lam and 10000 people shared</h6>';
    //             echo '</div> ';
    //             echo '<div class="card-body" style="display: flex; justify-content: space-between;">';
    //             echo '<form action="" method="post">';
    //             echo '<button type="submit" style="width:300px" name="like" value="' . $data[$i][0] . '" class="btn btn-primary">
    //               <i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>';
    //             echo '<button type="submit" style="width:300px" class="btn btn-primary">
    //              <i class="fa fa-comment" aria-hidden="true"></i> Comment</button>';
    //             echo '<button type="submit" style="width:300px" class="btn btn-primary">
    //              <i class="fa fa-share" aria-hidden="true" value="' . $data[$i][0] . '" name="share"></i>Share</button>';
    //             echo '</form>';
    //             echo '</div>';
    //             echo '</div>';
    //         }
    //     }
    // }
}
