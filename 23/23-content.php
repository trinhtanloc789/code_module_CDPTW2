<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>

<div class="type-23">
        <div class="container">
            <div class="title">
                Related products
            </div>
            <div class="row fix">
                <div class="col-md-3">
                    <div class="img-card">

                        <a class="click-img" href="#"><span>SALE!</span><img class="img-responsive" src="./images/23-1.png"
                                alt=""></a>
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="nametour">
                        Le Seychelles
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="price">
                        <p>$1,000.00 – $2,000.00</p>
                    </div>

                    <a class="btn" href="">SECLECT OPTIONS</a>
                </div>
                <div class="col-md-3">
                    <div class="img-card">
                        <a class="click-img" href="#"><span>SALE!</span><img class="img-responsive" src="./images/23-2.png"
                                alt=""></a>
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="nametour">
                        Hawaii Coast
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="price-sale">
                        <p class="p1"> <span>$1,000.00</span> <a href="#">$800.00</a> </p>
                    </div>

                    <a class="btn" href="">ADD TO CARD</a>
                </div>
                <div class="col-md-3">
                    <div class="img-card">
                        <img class="img-responsive" src="./images/23-3.png" alt="">
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="nametour">
                        Ko Samui
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="price-sale">
                        <p class="p1"> <span>$1,200.00</span> <a href="#">$999.00</a> </p>
                    </div>

                    <a class="btn" href="">ADD TO CARD</a>
                </div>
                <div class="col-md-3">
                    <div class="img-card">
                        <a class="click-img" href="#"><span>SALE!</span><img class="img-responsive" src="./images/23-4.png"
                                alt=""></a>
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="nametour">
                        Jamaica
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="price">
                        <p>$1,000.00 – $2,000.00</p>
                    </div>

                    <a class="btn" href="">SECLECT OPTIONS</a>
                </div>
            </div>
        </div>
    </div>