?>
<?php
    $log = 5; //表示するログの数初期は、5
    $fp = fopen('log.html', 'r');
    for($i=0; $i < $log; $i++){
    $fps = fgets($fp);
    print $fps;
    }
    ?>
<?php

$name = $_POST{'name'};
$txt = $_POST{'txt'};
$txt = htmlspecialchars($txt);
if(isset($txt)) {
$file = file_get_contents('log.html');
$fp = fopen('log.html', 'w');
fputs($fp, $name . "<br />" . $txt . "<hr>" . "\n" . $file);
fclose($fp);
}

