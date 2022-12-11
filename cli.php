#!/usr/bin/env php
<?php

const ROOT = __DIR__;

include ROOT . "/vendor/autoload.php";

framework\Nano::init(array_merge(
    require ROOT . "/config/common.php",
    require ROOT . "/config/console.php"
))->run();