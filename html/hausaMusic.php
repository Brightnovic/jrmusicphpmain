<?php

require_once "../config/db.php";
require_once "../utils/functions.php";

$SONGS = get_songs("hausa");

// number of songs per row
$song_per_page = 10;

// get current page
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// start from
$start = ($page - 1) * $song_per_page;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384- 
         B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/default.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-e3jlMS+7AEX94aY6sXkg2nnf12frW3N8HTR7GL6Dd+KbEKjFEvtO9zrfLlWDL8PS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Hausa Page</title>
</head>

<body class="">
    <!-- navbar  -->

    <nav class="navbar navbar-light  bg-show shadow-lg  border-bottom py-2">
        <div class="container py-4">
            <div class="container">
                <div class="py-3">
                    <a class="navbar-brand text-light display-3 fw-bolder py-3" href="#">
                        JR STAND

                    </a>

                </div>

                <div class="container py-2">
                    <div class="row">
                        <div class="col img-color">
                            <a href="../index.html" class="text-light fw-bolder">
                                <i class="fas fa-home"></i>
                                home
                            </a>
                        </div>
                        <div class="col img-color">
                            <a href="music.html" class="text-light fw-bolder"> <i class="fas fa-music"></i>music</a>
                        </div>

                        <div class="col img-color">
                            <a href="advertcontact.html" class="text-light fw-bolder"><i class="fas fa-tv"></i>advert</a>
                        </div>
                        <div class="col img-color">
                            <a href="video.html" class="text-light fw-bolder"> <i class="fas fa-video"></i>
                                </i>video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>




    <!-- end of navbar -->









    <!-- switch between light and dark mode -->



    <div class="container my-5 d-flex align-content-center justify-content-center flex-column ">
        <p class="fw-bolder text-primary fs-5 align-self-center">switch mode</p>

        <button class="btn btn-dark buttonWidth align-self-center" id="mode-switch"><span class="material-symbols-outlined">
                toggle_on
            </span></button>
    </div>






    <!--  part of navbar -->
    <div class="   shadow-sm py-5 mt-5  table-hover ">
        <div class="container  mt-5 sectionOneBg py-4 border border-primary">
            <div class="row ">
                <div class="col text-primary text-center border-right border-primary">
                    <a href="djmix.php" class="fw-bolder text-info">DJ mix</a>
                </div>
                <div class="col text-primary text-center border-right border-right border-primary">
                    <a href="music.php" class="fw-bolder text-info ">Music</a>
                </div>
                <div class="col text-primary text-center border-right border-right border-primary">
                    <a href="yorubaMusic.php" class="fw-bolder text-info">Yoruba Music</a>
                </div>
                <div class="col text-primary text-center border-right border-right border-primary">
                    <a href="hausaMusic.php" class="fw-bolder text-info"> Hausa music</a>
                </div>
                <div class="col text-primary text-center border-right border-right border-primary">
                    <a href="igboMusic.php" class="fw-bolder text-info"> Igbo Music</a>
                </div>
            </div>
        </div>
    </div>










    <!-- search form -->

    <div class="container">
        <form method="post" action="./search.php" class="row flex-wrap">
            <input name="what" class="form-control form bg-input" type="text" placeholder="search for something here">
            <button name="search" class=" btn bg-show fw-bolder text-light ms-auto searchButton rounded-2 btn-outline-info my-3">
                search</button>
        </form>
    </div>







    <!--  trending div -->

    <div class="container bg-dark my-3 bg-show py-4">
        <div class="col text-capitalize text-lg-center text-light text-sm-start my-2 bg fw-bolder display-5">Hausa music</div>
    </div>







    <!-- trending div -->
    <div class="container  text-white my-3  ">
        <!-- you can remove other divs and use the  one below -->


        <div class="col py-3  row mt-3 d-flex my-3 ">
            <?php $YORUBA = get_songs_by_genre("hausa", $start, $song_per_page); ?>

            <?php if ($YORUBA) : ?>
                <?php foreach ($YORUBA as $yoruba) : ?>
                    <div class="newdiv border border-primary d-block d-flex flex my-3 ">
                        <div id="img" class="circlerounded col-2">
                            <img src="../photos/<?= json_decode($yoruba['song_photo'], true)['name']; ?>" alt="unable to load music image" srcset="" class="imgme img img-fluid font-italic text-danger">
                        </div>

                        <div class="content py-3 d-flex my-3">
                            <div id="artise" class=" text-primary fw-bold my-3">
                                <!-- song title and artist -->
                                <p><?= $yoruba['artist']; ?> - <?= $yoruba['song_name']; ?></p>

                                <!-- download link -->
                                <form method="post" action="./uploadedcontent.php?song=<?= $yoruba['song_name']; ?>">
                                    <button name="download" value="<?= json_decode($yoruba['song'], true)['name']; ?>" class=" link link-offset-3">download MP3 </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No songs available</p>
            <?php endif; ?>

        </div>

    </div>















    <!-- pagination -->
    <div class="pagination mx-auto text-light">

        <!-- totol songs of this genre -->
        <?php $page_count = mysqli_num_rows($SONGS); ?>

        <!-- total number of pages -->
        <?php $total_pages = ceil($page_count / $song_per_page); ?>

        <!-- pagiantion buttons -->
        <div class="page_buttons">

            <?php if ($total_pages >= 1) : ?>
                <!-- first button -->
                <a href="?page=<?= $page = 1; ?>">First</a>

                <!-- previous button -->
                <?php if ($page == 1) : ?>
                    <a href="?page=<?= $page; ?>">Previous</a>
                <?php else : ?>
                    <a href="?page=<?= $page - 1; ?>">Previous</a>
                <?php endif; ?>


                <!-- numbered buttons -->

                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <a href="?page=<?= $i; ?>"> <?= $i; ?> </a>
                <?php endfor; ?>

                <!-- next page -->
                <?php if ($page == $total_pages) : ?>
                    <a href="?page=<?= $page; ?>">Next</a>
                <?php else : ?>
                    <a href="?page=<?= $page + 1; ?>">Next</a>
                <?php endif; ?>

                <!-- last page -->
                <a href="?page=<?= $total_pages; ?>">Last</a>
            <?php else : ?>
                <p></p>
            <?php endif; ?>


        </div>
    </div>







    <!-- footer -->

    <footer class="bg-show py-3 bg-dark">
        <div class="container">

            <div class="row  aMargin flex-wrap ">

                <div class="col  centerContent">

                    <h3 class="h2 fw-bolder text-success">Explore</h3>
                    <div class=""><a class="link fw-bold  text-decoration-underline text-capitalize text-light  " href="../index.html">Trending
                            Songs</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="#">Videos</a>
                    </div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="music.html">most
                            downloaded songs</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="../index.html">trending</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="news.html">popular
                            news</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light  " href="comdeyVideos.html">popular
                            comedy</a></div>
                </div>
                <div class="col">

                    <h3 class="h2 fw-bolder text-success">
                        <div class="miss">For Artists and </div> Vendors
                    </h3>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light  " href="https:www.google.com/artist">Artist</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="#">Artist
                            FQR</a>
                    </div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="../index.php">official
                            login</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="advertcontact.html">report
                            a
                            problem</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="https:wa.me/+2348076627288">contact
                            developers</a></div>
                    <div><a class="link fw-bold text-decoration-underline text-capitalize text-light  " href="advertcontact.html">promote
                            your music</a></div>

                </div>

                <div class="col">

                    <h3 class="h2 fw-bolder text-success ms-xxl-5">Company</h3>
                    <div class="ms-xxl-5"><a class="link fw-bold text-decoration-underline text-capitalize text-light  " href="advertcontact.html">About
                            us</a></div>
                    <div class="ms-xxl-5"><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="advertcontact.html">Contact</a>
                    </div>
                    <div class="ms-xxl-5"><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="advertcontact.html">Advertising</a>
                    </div>
                    <div class=" ms-xxl-5"><a class="link fw-bold text-decoration-underline text-capitalize text-light   " href="news.html">News</a>
                    </div>
                    <div class="ms-xxl-5"><a class="link fw-bold text-decoration-underline text-capitalize text-light " href="advertcontact.html">join
                            us</a>
                    </div>


                </div>
            </div>

        </div>





    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>