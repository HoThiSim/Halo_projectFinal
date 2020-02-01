<?php
require_once '../database/connection.php';
$user = json_decode($_SESSION['account']);
if (isset($_POST['ok'])) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now = getdate();

    $currentTime = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"];
    $date = $now["mday"] . "-" . $now["mon"] . "-" . $now["year"];
    $content = $_POST['postContent'];
    $emotion=$_POST['emotion'];
    $img = '';
    if (isset($_POST['imageInsert'])) {
        $img = $_POST['imageInsert'];
    }
    $stmInsert = 'INSERT INTO notification(not_content,user_id,notification_image,not_date,emotion) 
                       VALUES("' . $content . '",' . $user->user->user_id . ',"' . basename($img) . '","' . $currentTime . ',' . $date . '","'.$emotion.'")';

    if ($connection->query($stmInsert)) {
    } else {
        echo "can't insert!";
    };
}
