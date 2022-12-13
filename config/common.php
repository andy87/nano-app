<?php

use nano\Components\Core\App;
use nano\Components\Core\Request;
use nano\Components\Core\Controller;
use nano\Components\Core\Controllers\Action;
use nano\Interfaces\Core\ResponseInterface;

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

// Настройки

return [
    DIR => [
        CONFIG => ROOT  . DS . 'config',
        CONTROLLER => ROOT  . DS . 'controller' . DS . 'web',
        VIEW => ROOT  . DS . 'views',
        LAYOUT => ROOT  . DS . 'views' . DS . '_layouts',
    ],
    COMPONENTS => [
        APP => App::class,
        ACTION => Action::class,
        REQUEST => Request::class,
        CONTROLLER => Controller::class,
    ],
    CONTROLLER => [
        NS => 'app\\controllers\\',
        PREFIX => '',
        DEFAULT_NAME => 'site',
        SUFIX => 'Controller',
    ],
    ACTION => [
        PREFIX => '',
        DEFAULT_NAME => 'index',
        SUFIX => '',
    ],
];