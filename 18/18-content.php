<?php
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
            <div class="video">
                <img class="img-responsive img-center" src="./images/18-1.png" alt="">
                
            </div>
        </div>

    </div>