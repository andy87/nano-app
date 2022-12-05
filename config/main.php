<?php

use and_y87\nano\components\App;
use and_y87\nano\components\app\Request;
use and_y87\nano\components\app\View;
use and_y87\nano\components\controllers\Action;
use and_y87\nano\components\app\Controller;


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