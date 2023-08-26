<?php

require_once "../config/db.php";
require_once "../utils/functions.php";

// uploading singles
if (isset($_POST['video'])) {
    // uncomment the line below to see the infomation about the files to be uploaded
    print_r($_FILES);

    $artist = sanitize_inputs($_POST['artist']);
    $title = sanitize_inputs($_POST['title']);
    $genre = sanitize_inputs($_POST['type']);
    $lyrics = null;
    $album = null;

    // CHECK IF SONG ALREADY EXIST IN DATABASE
    $check = check_if_song_in_db($title, $artist, $genre);
    if($check) die("Song already in database");
    
    // song to be uploaded
    $image = null;
    $file = $_FILES['video'];

    // check if file has any error
    if($file['error']) die("Selected file has error!!!");

    // SET FILESIZE OF 50MB AS HIGHEST
    $file_size = $file['size'];
    $max_size = 100 * 1024 * 1024;

    if($file_size > $max_size) die("File size too big to be uploaded");

    // RENAMING SONG TO BE UPLOADED USING THE TIME STAMP OF FILE UPLOAD
    $filename = $file['name'];
    // $filename = time() . $file['name'];

    // CURRENT LOCATION
    $tmp_location = $file['tmp_name'];

    // FILE NEW LOCATION
    $destination = "../videos/";

    // print_r($artist . " " . $title . " " . $genre);
    // die();

    if(move_uploaded_file($tmp_location, $destination . $filename)){
        $uploaded_file = [
            "name" => "$filename",
            "type" => explode("/", $file['type'])
        ];
    }

    $uploads = json_encode($uploaded_file);

    // VIDEO ID
    $video_id = uniqid("vid_");

    // INSERTING INTO DB
    $query = insert_video_into_db($video_id, $artist, $title, $uploads, $genre);

    $result = mysqli_query($conn, $query);

    if(!$result) die("Error uploading file".mysqli_error($conn));
    header("Location: ../html/upload.php");
    
}