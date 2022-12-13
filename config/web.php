<?php

use nano\Components\Web\App;
use nano\Components\Web\View;
use nano\Components\Web\Request;
use nano\Components\Web\Response;
use nano\Components\Web\Controller;
use nano\Components\Web\Controllers\Action;
use nano\Interfaces\Web\ResponseInterface;

// Настройки

return [
    COMPONENTS => [
        APP => App::class,
        VIEW => View::class,
        ACTION => Action::class,
        REQUEST => Request::class,
        RESPONSE => Response::class,
        CONTROLLER => Controller::class,
    ],
    RESPONSE => [
        FORMAT => ResponseInterface::FORMAT_HTML
    ],
    CONTROLLER => [
        NS => 'app\\controllers\\web\\',
    ],
    TPL => [
        CATCH_ => '~views/_common/catch',
        LAYOUT => '~views/_layouts/wrapper'
    ],
];