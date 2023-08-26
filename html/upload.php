<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384- 
     B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/default.png" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title> upload</title>
</head>

<body class="bg-show bg-dark">





    <!-- navbar -->



    <nav class="navbar   bg-dark py-4">
        <div class="container bg-light">
            <div class="  ">
                <a class="navbar-brand fw-bolder text-bg-show" href="#">upload on JR Music</a>
            </div>
        </div>
    </nav>
    <div class="display-1 text-primary fw-bolder displaynone"> please use your laptop to upload on JR music</div>
    <div class="container  Dnone my-5 bg-dark">

        <div class="row section2">
            <div class="col-3 bg-dark  mx-3">
                <label for="standard-select" class="fw-bolder h3"> Select what to post</label>
                <div class="select bg-dark text-light">
                    <select id="standard-select" name="standard-select">

                        <option value="news" class="fw-bolder">Select Category</option>
                        <option value="news" class="fw-bolder">News</option>
                        <option value="music" class="fw-bolder">music</option>
                        <option value="video" class="fw-bolder">Video</option>
                    </select>
                </div>

            </div>
            <div class="col-8 bg-dark rounded-3">


                <div class="container renderDiv bg-show" id="renderHere">


                </div>



            </div>
        </div>



    </div>

    <!-- return to social media page -->
    <div class="container bg-dark">
        <button class="btn">
            <a href="../index.html" class="btn  bg-primary fw-bold text-light"> return to home page</a>
        </button>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <script>
        const select = document.getElementById('standard-select');
        const contentDiv = document.getElementById('renderHere');
        const music = `<form action="../handlers/audio_handler.php" method="post" enctype="multipart/form-data" class=" py-5">
                        <p class="text-light"> ! ! make sure to include download then title !<p/>
                        <label for="file" class="h5 text-primary">upload music img</label>
                        <input type="file" accept="image/*" class="py-2" src="" name="song_photo">
                        <br>
                        <input type="text" required name="artist" id="" class="fw-bolder px-5 py-3 form-control form bg-input " placeholder="enter Artist name">
                        <br>
                        <input type="text" name="song_title" placeholder="Song Title" required>
                        <br>
                        <textarea name="lyrics" cols="30" rows="5" placeholder="Song lyrics"></textarea>
                        <br>
                        <span>Genre: </span>
                        <select name="genre" id="" style="border: 1px solid red; z-index:1000;" required>
                        <option value="">Select genre</option>
                        <option value="African">African</option>
                        <option value="highlife">Highlife</option>
                        <option value="yoruba">Yoruba</option>
                        <option value="igbo">Igbo</option>
                        <option value="hausa">Hausa</option>
                        <option value="dj_mix">DJ Mix</option>
                        </select>
                        <br>
                        <input type="file" name="song" accept="audio/*" required>
                        <br>
                        <br>
                        <button class="btn btn-outline-secondary my-3" name="song" type="submit"
                            id="inputGroupFileAddon04"> upload </button>
                    </form>`;

        const video = `  <form action="../handlers/video_handler.php" method="post" enctype="multipart/form-data" >
            
            <br>
            <p class="text-light"> ! ! make sure to include download then title ! !<p/>
            <input type="text" name="artist" id="" required class="fw-bolder p-2 my-4" placeholder="Enter video or artist name">
            <input type="text" name="title" id="" required class="fw-bolder p-2 my-4" placeholder="Enter Title">
            <br>
                        <span>Type: </span>
                        <select name="type" id="" style="border: 1px solid red; z-index:1000;" required>
                        <option value="">Select Video Type</option>
                        <option value="music">Music Video</option>
                        <option value="comedy">Comedy</option>
                        </select>
                        <br>
            <input type="file" name="video" accept="mp4/*" required class="form-control" id="inputGroupFile04"
                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary my-3" name="video" type="submit"
                id="inputGroupFileAddon04">upload</button>
        </form>`;
        
        const news = ` <form action="../handlers/news_handler.php" method="post" enctype="multipart/form-data" >
                        <label for="file" class="h5 text-primary py-3">upload the image for news </label>
                        <br>
                        <input type="file" accept="image/*" name="photo" >
                        <br>
                        <input type="text" name="title" id="" class="fw-bolder p-2 my-4" placeholder="Enter The news Title">
                        <input type="text" name="content" id="" class="fw-bolder p-2 my-4" placeholder="Enter Content">

                        
                        <button name="submit" class="btn btn-outline-secondary my-3" type="submit"
                            id="inputGroupFileAddon04">upload</button>
                    </form>`;
        /*     const trendmusic = ` <div class=" ">
                 <label for="file" class="h5 text-primary py-3">upload the image for trending songs  </label>
                            <br>
                            <br>
                            <input type="file"  src="">
                            <br>
                            <br>
                            <input type="text" name="" id="" class="fw-bolder p-2 my-4" placeholder="Enter The news Title">
                            <input type="text" name="" id="" class="fw-bolder p-2 my-4" placeholder="Enter Content">
                            <br>
                            <br>
                            
                            <button class="btn btn-outline-secondary my-3" type="button"
                                id="inputGroupFileAddon04">upload</button>
                        </div>`; */

        select.addEventListener('change', function () {
            const value = select.value;

            // Load content based on selected value
            if (value === 'music') {
                contentDiv.innerHTML = music;
            } else if (value === 'video') {
                contentDiv.innerHTML = video;
            } else if (value === 'comedy') {
                contentDiv.innerHTML = video;
            }
            else if (value === 'news') {
                contentDiv.innerHTML = news;
            }
        });





    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>