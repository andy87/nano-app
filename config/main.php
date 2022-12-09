<?php

use nano\Components\Web\App;
use nano\Components\Web\Controller;
use nano\Components\Web\Controllers\Action;
use nano\Components\Web\Request;
use nano\Components\Web\View;

// Настройки

return [
    COMPONENTS => [
        APP => App::class,
        VIEW => View::class,
        ACTION => Action::class,
        REQUEST => Request::class,
        CONTROLLER => Controller::class,
    ],
    DIR => [
        CONTROLLER => ROOT  . DS . 'controller',
        VIEW => ROOT  . DS . 'views',
        LAYOUT => ROOT  . DS . 'views' . DS . '_layouts',
        CONFIG => ROOT  . DS . 'config',
    ],
    ROUTS => [
        'example/' => 'site/example'
    ]
];