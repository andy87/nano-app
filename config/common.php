<?php

/**
 * @param $data
 * @return void
 */
function printPre($data)
{
    if ( !is_array($data) && !is_object($data)) $data = ['$data' => $data];
    echo '<pre>';
    print_r($data);
    exit();
}



return [
    'file' => __FILE__
];