<?php

use nano\Components\Web\View;

include "vendor/autoload.php";

const ROOT = __DIR__;

try {

    framework\Nano::init(array_merge(
        require "config/common.php",
        require "config/web.php"
    ))->run();

} catch (Exception $e ) {

    View::display( __DIR__ . '/views/_common/catch', [
        'e' => $e
    ]);
}