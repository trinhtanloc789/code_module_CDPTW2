<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-15">
        <div class="container">
            <div class="rize">
                <div class="row">
                    <div class="col-md-6">
                        <p><img src="./images/15-2.png" alt=""> Doing the right thing,
                            at the right time.
                        </p>
                    </div>
                   
                </div>
            </div>

            <div class="col-md-9">
                <div class="rexbin">
                    <div class="rexcol1">
                        <div class="number">
                            15
                        </div>
                        <div class="cmt-num">
                            STAFF
                        </div>
                    </div>
                    <div class="rexcol2">
                        <div class="number">
                            100
                        </div>
                        <div class="cmt-num">
                            TOURS
                        </div>
                    </div>
                    <div class="rexcol3">
                        <div class="number">
                            47
                        </div>
                        <div class="cmt-num">
                            PACKAGES
                        </div>
                    </div>
                    <div class="rexcol4">
                        <div class="number">
                            10
                        </div>
                        <div class="cmt-num">
                            SERVICES
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>