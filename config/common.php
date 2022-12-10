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
    NAME_SPACE => [
        CONTROLLER => 'app\\controllers\\'
    ]
];