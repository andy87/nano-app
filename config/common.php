<?php

use nano\Components\Core\App;
use nano\Components\Core\Request;
use nano\Components\Core\Response;
use nano\Components\Core\Controller;
use nano\Components\Core\Controllers\Action;
use nano\Interfaces\Core\Enums\Environment;

// Настройки

return [
    ENV => Environment::LOCAL,
    DIR => [
        CONFIG => ROOT  . DS . 'config',
        CONTROLLER => ROOT  . DS . 'controller',
        VIEW => ROOT  . DS . 'views',
        LAYOUT => ROOT  . DS . 'views' . DS . '_layouts',
    ],
    COMPONENTS => [
        APP => App::class,
        ACTION => Action::class,
        REQUEST => Request::class,
        RESPONSE => Response::class,
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