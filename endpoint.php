<?php

include "vendor/autoload.php";

const ROOT = __DIR__;

framework\Nano::init( require "config/main.php" )->run();