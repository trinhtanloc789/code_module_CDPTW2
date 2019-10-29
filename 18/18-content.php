0<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type_18">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="txt">
                    Hello. Our agency has been present for over 20 years in the market. We make the most of all our
                    customers.
                </div>
            </div>
            <div class="col-md-3">
                <p>
                    Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod
                    orci ut.
                    <br>
                    <br>
                    Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod
                    orci ut.
                </p>
            </div>
            <div class="col-md-3">
                <p>
                    Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod
                    orci ut.
                    <br>
                    <br>
                    Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod
                    orci ut.
                </p>

            </div>
        </div>
        
        <div class="card">
            <div class="card-play"></div>
            <div class="card-video">
                <iframe id="video"
                    src="https://www.youtube.com/embed/JE9z-gy4De4?enablejsapi=1&amp;html5=1&amp;iv_load_policy=3&amp;rel=0&amp;showinfo=0"
                    allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>
        <script src="./js/18.js"></script>

    </div>

</div>