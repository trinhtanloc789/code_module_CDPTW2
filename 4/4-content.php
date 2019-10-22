<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="type-4">
        <div class="container">
            <div class="row heighrow">
                <div class="col-md-6">
                    <div class="pd">
                        <div class="img">
                            <img class="img-fluid" src="./images/4-1.png" alt="">
                        </div>
                        <div class="cmt bordersolid">
                            <div class="title">
                                OUR NEWS
                            </div>
                            <div class="ttname">
                                Boat Excursions
                            </div>
                            <div class="descrip">
                                Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque
                                euismod orci ut et lobortis.
                            </div>
                            <a class="btn-default" href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pd bg-orange">
                        <div class="img">
                            <img class="img-fluid" src="./images/4-2.png" alt="">
                        </div>
                        <div class="cmt">
                            <div class="title text-white">
                                TRAVEL TIPS
                            </div>
                            <div class="ttname text-white">
                                New Routes
                            </div>
                            <div class="descrip text-white">
                                Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis.
                            </div>
                            <a class="btn-white" href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row heighrow">
                <div class="col-md-6">
                    <div class="pd bg-green">
                        <div class="cmt">
                            <div class="title text-white">
                                OUR NEWS
                            </div>
                            <div class="ttname text-white">
                                Best Beaches
                            </div>
                            <div class="descrip text-white">
                                Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et.
                                Quisque euismod orci ut et lobortis.
                            </div>
                            <a class="btn-green" href="#">READ MORE</a>
                        </div>
                        <div class="img">
                            <img class="img-fluid" src="./images/4-3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pd">

                        <div class="cmt bordersolid">
                            <div class="title">
                                OUR NEWS
                            </div>
                            <div class="ttname">
                                Love Travel
                            </div>
                            <div class="descrip">
                                Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque
                                euismod orci ut et lobortis.
                            </div>
                            <a class="btn-default-green" href="#">READ MORE</a>
                        </div>
                        <div class="img">
                            <img class="img-fluid" src="./images/4-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>