<?php

use nano\Components\Web\View;

/**
 * @var View $this
 * @var string $method
 */

echo $this->render('~views/_common/info', [
    'file' => __FILE__,
    'method' => $method,
]);

