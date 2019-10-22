<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

?>

<img class="img-fluid" src="./images/Capture.PNG" alt="">
    <!-- <div class="type-7">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="control-group">
                        <label class="control-label">DateTime Picking</label>
                        <div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z"
                            data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                            <input size="16" type="text" value="" readonly>
                           
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <input type="hidden" id="dtp_input1" value="" /><br />
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="./js/jquery-1.8.3.min.js" charset="UTF-8"></script>

    <script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="./js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language: 'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language: 'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script> -->