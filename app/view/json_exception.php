<?php

$info = [
    'errno'  => '500',
    'errmsg' => htmlentities($message),
    'data'   => [],
];

if (!empty($datas)) {
    $exceptionData = [];
    foreach ((array)$datas as $label => $value) {
        if (empty($value)) {
            $value = 'ղվᏓᏓ';
        }
        $exceptionData[$label] = htmlentities($value);
    }
    $info['data']['exception_data'] = $exceptionData;
}

if (!empty($tables)) {
    $envData = [];
    foreach ((array)$tables as $label => $value) {
        if (empty($value)) {
            $value = 'ղվᏓᏓ';
        }
        $envData[$label] = htmlentities($value);
    }
    $info['data']['env_data'] = $envData;
}

header_remove('Content-Type');
header('Content-Type: text/json; charset=utf-8');
echo json_encode($info, JSON_UNESCAPED_SLASHES);
die;
