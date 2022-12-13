<?php

namespace app\controllers\web;

use nano\Components\Web\Response;
use nano\Components\Web\Controller;
use nano\Interfaces\Core\ResponseInterface;

/**
 *  class `PingController`
 */
class PingController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        Response::setupFormat(ResponseInterface::FORMAT_RAW);

        return 'pong';
    }

}