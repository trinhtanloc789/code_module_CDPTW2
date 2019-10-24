<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <script src="./js/all.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/rangeslider-pure@0.4.4/dist/range-slider.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./css/rangeslider.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/rangeslider-pure@0.4.4/dist/range-slider.min.js"></script>
    <!-- <script src="./js/rangeslider.min.js"></script> -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css">     -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="./js/jquery.min.js"></script> -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <!-- <link rel="stylesheet" href="./js/moment-with-locales.min.js"> -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
    <!-- <script src="./js/bootstrap-datetimepicker.min.js"></script> -->
    <link rel="stylesheet" href="./css/7.css">
    <script src="./js/7.js"></script>


    <title>Module 7</title>
</head>

<body>
    <?php include './7-content.php'; ?>


</body>

</html>