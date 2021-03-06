<!DOCTYPE html>

<html lang="en-us">

<head>

    <title>Danh sách yêu thích</title>
    <meta charset="UTF-8">

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/wish-list-style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    <!-- Header -->
    <div class="header">
        <h1>Danh sách yêu thích</h1>
    </div>
    <br>

    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input id="movie-input" class="form-control mr-sm-2" type="search" placeholder="Search any movie!"
                aria-label="Search">
            <button id="search-movie" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            <button id="trending-movies" class="btn btn-outline-success" type="button">What's Trending?</button>

            <button id="user-favorites" class="btn btn-outline-success" type="button">Latest User Wishes</button>

            <a href="./index.php"><button id="go-to-homepage" class="btn btn-outline-success" type="button">HOMEPAGE</button></a>
        </form>
    </nav>

    <div id="main-container">

        <div id="search-container">

            <!-- Results -->
            <div id="results">
            </div>

        </div>

        <!-- Wishlist Container-->
        <div id="wishlist-container">
        </div>

    </div>

    <div id="video-player"></div>

    <div id="video-background" class="close-trailer"></div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Script -->
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>