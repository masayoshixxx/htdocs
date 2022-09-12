<?php
$success = file_put_contents(
    'data/news.text',
    'ホームページをリニューアルしました'
);

if ($success !== false) {
    echo '完了';
} else {
    echo '失敗';
}
