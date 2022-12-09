<?php

include "vendor/autoload.php";

const DS = DIRECTORY_SEPARATOR;
const ROOT = __DIR__;

framework\Nano::init( require "config/main.php" )->run();