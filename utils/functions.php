<?php

function get_user($email){
    global $conn;
    $query = "SELECT * FROM `user` WHERE `email` = '$email' ";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function sanitize_inputs($input){
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($input)));
}

function check_if_song_in_db($title, $artist, $genre){
    global $conn;

    $query = "SELECT * FROM `songs` WHERE `artist` = '$artist' and `song_name` = '$title' and genre = '$genre'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function insert_song_into_db($song_id, $artist, $song_title, $song_file, $image, $genre, $lyrics, $album) {

    $query = "INSERT INTO `songs`(`song_id`, `artist`, `song_name`, `song`, `song_photo`, `genre`, `lyrics`, `album`) VALUES ('$song_id','$artist','$song_title', '$song_file', '$image','$genre','$lyrics','$album')";

    // Return true if the song is successfully inserted, false otherwise
    return $query;
}

function insert_video_into_db($song_id, $artist, $song_title, $song_file, $genre) {

    $query = "INSERT INTO `songs`(`song_id`, `artist`, `song_name`, `song`, `song_photo`, `genre`, `lyrics`) VALUES ('$song_id','$artist','$song_title','$song_file',null,'$genre', null)";

    // Return true if the song is successfully inserted, false otherwise
    return $query;
}

function insert_news_into_db($song_id, $song_title, $content, $photo, $genre) {

    $query = "INSERT INTO `songs`(`song_id`, `artist`, `song_name`, `song`, `content`, `song_photo`, `genre`, `lyrics`) VALUES ('$song_id', null, '$song_title', null, '$content', '$photo', '$genre', null)";

    // Return true if the song is successfully inserted, false otherwise
    return $query;
}

function get_songs_by_genre($genre, $start, $pages_number){
    global $conn;
    $query = "SELECT * FROM `songs` WHERE `genre` = '$genre' ORDER BY upload_date DESC LIMIT $start, $pages_number";
    $result = mysqli_query($conn, $query);
    if ($result === false) {
        // Print the SQL error
        die(mysqli_error($conn));
    }
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_all_songs($start, $pages_number){
    global $conn;
    $query = "SELECT * FROM `songs` ORDER BY upload_date DESC LIMIT $start, $pages_number";
    $result = mysqli_query($conn, $query);
    if ($result === false) {
        // Print the SQL error
        die(mysqli_error($conn));
    }
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get__songs(){
    global $conn;
    $query = "SELECT * FROM `songs`";
    $result = mysqli_query($conn, $query);
    if ($result === false) {
        // Print the SQL error
        die(mysqli_error($conn));
    }
    return $result;
}

function get_songs($genre){
    global $conn;
    $query = "SELECT * FROM `songs` WHERE `genre` = '$genre'";
    $result = mysqli_query($conn, $query);
    return $result;
}

function get_recent_songs($genre){
    global $conn;
    $query = "SELECT * FROM songs WHERE genre = '$genre' LIMIT 0, 5 ORDER BY upload_date DESC";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_song_by_name($name){
    global $conn;
    $query = "SELECT * FROM songs WHERE song_name = '$name'";
    $result = mysqli_query($conn, $query);
    if ($result === false) {
        // Print the SQL error
        die(mysqli_error($conn)); 
    }
    return mysqli_fetch_assoc($result);

}