<?php

use and_y87\nano\Nano;

const DS = DIRECTORY_SEPARATOR;
const ROOT = __DIR__;

$config = require "config/main.php";

Nano::init($config)->run();