<?php

use andy87\nano\components\App;
use andy87\nano\components\app\Request;
use andy87\nano\components\app\View;
use andy87\nano\components\controllers\Action;
use andy87\nano\components\app\Controller;


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