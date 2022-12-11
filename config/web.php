<?php

use nano\Components\Web\App;
use nano\Components\Web\View;
use nano\Components\Web\Request;
use nano\Components\Web\Controller;
use nano\Components\Web\Controllers\Action;
use nano\Interfaces\Core\Enums\Environment;

// Настройки

return [
    ENV => Environment::LOCAL,
    COMPONENTS => [
        APP => App::class,
        VIEW => View::class,
        ACTION => Action::class,
        REQUEST => Request::class,
        CONTROLLER => Controller::class,
    ],
    CONTROLLER => [
        NS => 'app\\controllers\\web\\',
    ]
];