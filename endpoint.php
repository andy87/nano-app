<?php

const ROOT = __DIR__;

try {

    include ROOT . "/vendor/autoload.php";

    framework\Nano::setup([
        require ROOT . "/config/common.php",
        require ROOT . "/config/web.php"
    ])->run();

} catch ( Exception $e ) { ?>

    <h2>Nano  exception.</h2><hr>
    <?= $e->getMessage(); }
