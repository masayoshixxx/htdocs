<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');

if ($time < 9) {
    echo '※ 営業時間外です';
} else {
    echo 'ようこそ';
};

echo '<br>';

$s = 'あいうえお';
if ($s) {
    echo '$sには文字が入っています';
};
