<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>

<div class="type-7">
    <div class="container">

        <div class="title">
            OUR PACKAGES
        </div>
        <div class="cmt-title">
            Search your Holiday
        </div>

        <div class="vine">
            <div class="row">
                <div class="col-md-4">
                    <div class="selec">
                        <label >Select Your Destination :</label>
                        <select id="input" class="form-control" required="required">
                            <option value="">All Destinations</option>
                            <option value="">VIETNAMESE</option>
                            <option value="">CHINA</option>
                        </select>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="dtpicker">
                        <div class="form-group">
                            <label >Select Your Date :</label>
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="slideContainer">
                        <label class="m-price">Max price: <span id="value"></span></label>
                        <input type="range" min="0" max="10000" value="1" class="slider" id="myRange">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            See only promotions
                        </label>
                    </div>

                </div>
            </div>
        </div>

        <div class="boxfil">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 rize">
                    <span> <img src="./images/7-2.png" alt="7-2"> <a href="#">MORE FILTERS</a></span>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="hoverfil">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 foi">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="filname">
                                    Typologies :
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Relax
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        Cultural
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        Sport
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        History
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="filname">
                                    Durations :
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        1 - 3 Days
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        3 - 6 Days
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        6 - 9 Days
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        9 - 12 Days
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="filname">
                                    Difficulty :
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        High
                                    </label>

                                    <label>
                                        <input type="checkbox" value="">
                                        Medium
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        Low
                                    </label>


                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="filname">
                                    Min Age :
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        10 Years
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        8 Years
                                    </label>
                                    <label>
                                        <input type="checkbox" value="">
                                        3 Years
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>

        </div>


    </div>
</div>