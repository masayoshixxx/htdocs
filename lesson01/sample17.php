<?php
$xmlTree = simplexml_load_file('rss.xml');
foreach ($xmlTree->channel->item as $item) {
    echo '・' . $item->title . '<br>';
};
