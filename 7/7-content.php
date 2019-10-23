<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>
<div class="a" style="height: 100px;"></div>
<div class="type-7">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
                
                <span class="label label-default">Label</span>
                
                
                <select id="input" class="form-control" required="required">
                    <option value="">EUROPE</option>
                    <option value="">VIETNAMESE</option>
                    <option value="">CHINA</option>
                </select>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="slideContainer">
                    <label>Max price: <span id="value"></span></label>
                    <input type="range" min="0" max="100" value="1" class="slider" id="myRange">
                </div>
            </div>
        </div>
    </div>
</div>