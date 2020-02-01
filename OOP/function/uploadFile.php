<?php
      if(isset($_POST['uploadImg'])){ 
        $user=json_decode($_SESSION['account']);
        $target_dir = '../database/UserImg/'.$user->user->user_id.'/';   
        $filecount=0;
        $files = glob($target_dir . "*");   
        if ($files){
         $filecount = count($files);
        } 
        $target_file = $target_dir . basename($_FILES["imgToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["imgToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo '<script> alert(File is not an image")</script>';
                $uploadOk = 0;
            }
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["imgToUpload"]["tmp_name"], $target_file)) {      
                echo '<img style="width: 400px; height: 400px; margin: auto" id="imgPrepareUpLoad" class="card-img-bottom" src="'.$target_file.'" alt="">';
                echo '<input type="text" name="imageInsert"  hidden value="'.$target_file.'" >';
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }}

        
?>