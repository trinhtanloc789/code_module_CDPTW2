<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-9">
        <div class="container">
            <div class="b" style="height: 30px;"></div>
            <div class="row">
                <div class="col-md-6 col1">
                    <div class="col-form">
                        <div class="txt1">
                            Drop us a line
                        </div>
                        <div class="a" style="height: 20px;"></div>
                        <div class="txt2">
                            Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis
                            rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam
                            nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque
                            tristique fringilla tempus.
                        </div>
                        <div class="a" style="height: 20px;"></div>
                        <div class="form-group">
                            <label >Name :</label>
                            <input type="text" class="form-control">
                            <div class="c" style="height: 10px;"></div>
                            <label >Email :</label>
                            <input type="text" class="form-control">
                            <div class="c" style="height: 10px;"></div>
                            <label >Message :</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="c" style="height: 10px;"></div>
                        <a class="btn" href="">SEND NOW</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1340.3471301215109!2d106.65526963681049!3d10.781711013723038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec7b6d74085%3A0x94e657c980401958!2zMjM1IEzDvSBUaMaw4budbmcgS2nhu4d0LCBQaMaw4budbmcgNiwgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1571146806696!5m2!1svi!2s" width="600" height="300" style="border:0;"></iframe>
                    <div class="a" style="height: 20px;"></div>
                    <div class="ct-map">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="infor1">
                                    <p class="p1">Address : <a class="a1" href="">Avenue 234</a></p>
                                    <p class="p1">City : <a class="a1" href="">New York - US</a></p>
                                    <p class="p1">Check-In : <a class="a1" href="">15:00 am</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="infor1">
                                    <p class="p1">Phone : <a class="a1" href="">00 837920234</a></p>
                                    <p class="p1">Email : <a class="a1" href="">info@travel.com</a></p>
                                    <p class="p1">Check-Out : <a class="a1" href="">11:00 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="avaiable">
                        AVAILABLE AT 10AM – 8PM
                    </div>
                    <div class="a" style="height: 20px;"></div>
                    <div class="phone">
                        + 202 555 0116
                    </div>

                </div>

            </div>
        </div>
    </div>