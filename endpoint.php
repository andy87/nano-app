<?php

include "vendor/autoload.php";

const ROOT = __DIR__;

framework\Nano::init(array_merge(
    require "config/common.php",
    require "config/web.php"
))->run();