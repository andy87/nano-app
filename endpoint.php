<?php

include "config/dev.php";
include "vendor/autoload.php";

const ROOT = __DIR__;

//include ROOT. "/vendor/andy87/nano-framework/const.php";
//printPre(require "config/main.php");

framework\Nano::init( require "config/main.php" )->run();