<?php

$myData = [
    'aaaaaaaaa' => 'bbbbbbbbbb',
    'cccccccccc' => 'ddddddd'
];

function formatJson($data) {
    return json_encode($data, JSON_PRETTY_PRINT);
}

$formatedJson = formatJson($myData);
echo $formatedJson;
