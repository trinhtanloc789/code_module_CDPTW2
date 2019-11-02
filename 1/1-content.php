<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 ">
                <div class="logo">
                    <img src="./images/1-2.png" alt="">
                </div>
                <div class="title-search">
                    SEARCH
                </div>
                <div class="find">
                    <p>Find your next holiday on
                        <span>72</span> cool packages !</p>
                </div>
                <div class="form1">
                    <p>
                        KEYWORD
                    </p>
                    <input type="text" placeholder="Insert keyword">

                    <img src="./images/1-4.png" alt="">
                </div>
                <div class="form1">
                    <p>
                        DESTINATION
                    </p>
                    <select class="form-control">
                        <option>All destinations</option>
                        <option>Europe</option>
                        <option>Vietnam</option>
                    </select>
                    <img src="./images/1-3.png" alt="">
                </div>
                <a class="btn btn-primary" href="#" role="button">SEARCH NOW</a>


            </div>
            <div class="col-md-8">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="textEffect">
                                <p class="p1">LUXURY</p>
                                <p class="p2">TRAVEL</p>
                            </div>
                            <img class="img-responsive" src="./images/1-1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <div class="textEffect">
                                <p class="p1">LUXURY</p>
                                <p class="p2">TRAVEL</p>
                            </div>
                            <img class="img-responsive" src="./images/1-5.png" alt="">
                        </div>
                    </div>
                </div>
                <script>
                    var swiper = new Swiper('.swiper-container');
                </script>
            </div>
        </div>
    </div>
</div>