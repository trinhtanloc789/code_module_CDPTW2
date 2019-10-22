<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="b" style="height: 30px;"></div>
                    <div class="txt1">
                        Facilities
                    </div>
                    <div class="b" style="height: 30px;"></div>
                    <div class="txt2">
                        LOREM IPSUM DOLOR SIT AMET, CONSECTETURADIPISCING ELIT. DONEC AT LIGULA IN LIGULA
                        ULTRICESVULPUTATE AT AC SAPIEN. IN JUSTO NEQUE, MALESUADAA LIBERO ET, LOREM IPSUM DOLOR SIT
                        AMET,CONSECTETUR ADIPISCING ELIT
                    </div>
                    <br>
                    <a class="btn" href="#">READ MORE</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 a">
                            <div class="bg-col">
                                <img class="img-icon" src="./images/12-2.png" alt="">
                                <br>
                                <div class="nameic">
                                    Kids
                                </div>

                                <div class="cmtic">
                                    FREE BUGGY
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 a">
                            <div class="bg-col">
                                <img class="img-icon" src="./images/12-3.png" alt="">
                                <br>
                                <div class="nameic">
                                    Drinks
                                </div>

                                <div class="cmtic">
                                    ALL INCLUDED
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 a">
                            <div class="bg-col">
                                <img class="img-icon" src="./images/12-4.png" alt="">
                                <br>
                                <div class="nameic">
                                    Camp
                                </div>

                                <div class="cmtic">
                                    CAROVAN INCLUDED
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12 a">
                            <div class="bg-col">
                                <img class="img-icon" src="./images/12-5.png" alt="">
                                <br>
                                <div class="nameic">
                                    World
                                </div>

                                <div class="cmtic">
                                    CUSTOM TOURS
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>