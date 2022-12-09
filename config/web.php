<?php

use nano\Components\Web\App;
use nano\Components\Web\View;
use nano\Components\Web\Request;
use nano\Components\Web\Controller;
use nano\Components\Web\Controllers\Action;
use nano\Interfaces\Core\Enums\Env;

// Настройки

return [
    'file' => __FILE__,
    ENV => Env::LOCAL,
    COMPONENTS => [
        APP => App::class,
        VIEW => View::class,
        ACTION => Action::class,
        REQUEST => Request::class,
        CONTROLLER => Controller::class,
    ],
    DIR => [
        CONFIG => ROOT  . DS . 'config',
        CONTROLLER => ROOT  . DS . 'controller',
        VIEW => ROOT  . DS . 'views',
        LAYOUT => ROOT  . DS . 'views' . DS . '_layouts',
    ],
    ROUTS => [
        'example/' => 'site/example'
    ]
];