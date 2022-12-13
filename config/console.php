<?php

use nano\Interfaces\Core\Enums\Environment;
use nano\Interfaces\Core\ResponseInterface;

// Настройки

return [
    ENV => Environment::LOCAL,
    RESPONSE => [
        FORMAT => ResponseInterface::FORMAT_RAW
    ],
    CONTROLLER => [
        NS => 'app\\controllers\\console\\',
    ]
];