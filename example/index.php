<?php
/**
 * Created by PhpStorm.
 * User: godfather
 * Date: 2019-03-17
 * Time: 19:17
 */
require_once '../Diff.php';
$json1 = array(
    "123" => "123",
    "456" => "46"
);
$json2 = array(
    "123" => "123",
    "456" => "456"
);
$json1 = json_encode($json1, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
$json2 = json_encode($json2, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
$str1 = "
dw
ad
wa
dawd
";
$str2 = "
dw
ad
w
dw
ad
"
?>
<html>
    <head>
        <title>diff_example</title>
        <link rel="stylesheet" href="diff_style.css" type="text/css">
    </head>
    <body>
        <div>
            <h1>Json String</h1>
            <?php
            echo Diff::toString(Diff::compare($json1, $json2));
            ?>
        </div>
        <div>
            <h1>Json Html</h1>
            <?php
            echo Diff::toHTML(Diff::compare($json1, $json2));
            ?>
        </div>
        <div>
            <h1>Json Table</h1>
            <?php
            echo Diff::toTable(Diff::compare($json1, $json2));
            ?>
        </div>
        <div id="string">
            <h1>String</h1>
            <?php
            echo Diff::toString(Diff::compare($str1, $str2));
            ?>
        </div>
        <div id="html">
            <h1>Html</h1>
            <?php
            echo Diff::toHTML(Diff::compare($str1, $str2));
            ?>
        </div>
        <div id="table">
            <h1>Table</h1>
            <?php
            echo Diff::toTable(Diff::compare($str1, $str2));
            ?>
        </div>
    </body>
</html>
