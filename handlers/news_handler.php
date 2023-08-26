<?php

require_once "../config/db.php";
require_once "../utils/functions.php";

if(isset($_POST['submit'])){
    print_r($_FILES);
    // print_r($_POST);

    $title = sanitize_inputs($_POST['title']);
    $content = sanitize_inputs($_POST['content']);
    $genre = "news";

    // photo file
    $photo = $_FILES['photo'];

    // set max size
    $photo_size = $photo['size'];
    $max_size = 10 * 1024 * 1024;

    if($photo_size > $max_size) die("photo size too big");

    if($photo['error']) die("photo error: " . $photo['error']);

    // file name
    $photo_name = $photo['name'];

    // location of photo
    $tmp_location = $photo['tmp_name'];

    // new location of photo
    $new_location = "../photos/";

    if (move_uploaded_file($tmp_location, $new_location.$photo_name)) {
        $uploaded_file = [
            "name" => "$photo_name",
            "type" => explode("/", $photo['type'])
        ];
    }

    $upload = json_encode($uploaded_file);

    // news id
    $news_id = uniqid("news_");

    // insert into database
    $query = insert_news_into_db($news_id, $title, $content, $upload, $genre);
    $result = mysqli_query($conn, $query);

    if(!$result) die("Error uploading file".mysqli_error($conn));
    header("Location: ../html/upload.php");

}

