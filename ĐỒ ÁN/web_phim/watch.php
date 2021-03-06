<?php
  if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
  if (isset($_GET['episode'])) $episode = $_GET['episode'];
  $sql = "select * from `episode` where `film_id` = '$film_id' and `episode` = '$episode'";
  $query= mysqli_query($link, $sql);
  $r=mysqli_fetch_assoc($query);
?>
<style type="text/css">
    div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\2605';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\2605';
}
</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="ZFvzpESY"></script>
<div id="content">
    <div  id="movie-display">
        <div class="row cur-location">
            <nav id="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="?mod=home">Xem phim</a>
                    </li>
                    /
                    <li class="breadcrumb-item">
                      <?php
                        if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
                        $sql = "select * from `film` where `id` = '$film_id'";
                        $query= mysqli_query($link, $sql);
                        $r1=mysqli_fetch_assoc($query);
                        $type_movie = $r1['type_movie'];
                        $sql2 = "select * from `type-movie` where `id` = '$type_movie'";
                        $query = mysqli_query($link, $sql2);
                        $r2=mysqli_fetch_assoc($query);
                      ?>
                      <a href="?mod=list&type=<?php echo $r2['handle'] ?>&year=2018"><?php echo $r2['name'] ?></a>
                    </li>
                    /
                    <?php
                    $sql = "select * from `film` where `id` = '$film_id'";
                    $query= mysqli_query($link, $sql);
                    $r3=mysqli_fetch_assoc($query);
                    ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $r3['name'] ?></li>
                </ol>
            </nav>
        </div>
        <div class="row body_video">
            <div class="col-sm-12">
                <video width="100%" height="100%" controls>
                    <source src="<?php echo $r['content'] ?>" type="video/mp4">
                    <!-- <src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4"> -->
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="share">
                <div class="row">
                    <a href="wish-list.php"><button type="button" class="btn btn-secondary">
                        <img src="images/icons/plus.png" alt="Share" width="20px"> Th??m v??o h???p
                    </button></a>
                    <button type="button" class="btn btn-primary share_fb">
                        <img src="images/icons/facebook_square_lightblue-512.png" alt="Share" width="20px"> Share
                    </button>
                    <button type="button" class="btn btn-secondary">AutoNext: On</button>
                    <button type="button" class="btn btn-secondary">Ph??ng to</button>
                    <button type="button" class="btn btn-secondary">
                        <img src="images/icons/lamp.png" alt="Share" width="20px"> T???t ????n
                    </button>
                </div>
            </div>
            <div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
        </div>
    </div>
    <div  id="detail">
        <div class="row">
            <p>B???n ??ang xem phim
                <a href="#"><?php echo $r3['name'] ?></a> online ch???t l?????ng cao mi???n ph?? t???i server phim GD 1.</p>
            <fieldset>
                <legend>H?????ng kh???c ph???c l???i xem phim</legend>
                <ul>
                    <li>S??? d???ng DNS 8.8.8.8, 8.8.4.4 ho???c 208.67.222.222, 208.67.220.220 ????? xem phim nhanh
                        h??n.
                    </li>
                    <li>Ch???t l?????ng phim m???c ?????nh chi???u l?? 360. ????? xem phim ch???t l?????ng cao h??n xin vui l??ng
                        ch???n tr??n player.</li>
                    <li>Xem phim nhanh h??n v???i tr??nh duy???t Google Chrome, C???c C???c</li>
                    <li>N???u b???n kh??ng xem ???????c phim vui l??ng nh???n CTRL + F5 ho???c CMD + R tr??n MAC v??i l???n.</li>
                </ul>
            </fieldset>
        </div>

    </div>
    <div  id="server-list">
        <div class="row">
            <div class="col-sm-3">
                Server
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <a href="#"> <button class="button btn-secondary seat">SERVER 1</button></a>
                    <a href="#"> <button class="button btn-secondary seat">SERVER 2</button></a>
                </div>
            </div>
        </div>           
    </div>

<div class="comments-field" style="background-color: white;">
    <div class="fb-comments" data-href="http://localhost/php_start/%C4%90%E1%BB%92%20%C3%81N/web_phim/web_phim/?mod=watch&amp;film_id=116&amp;episode=1" data-width="100%" data-numposts="5"></div>
</div>
</div>