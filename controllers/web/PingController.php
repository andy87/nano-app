<?php

namespace app\controllers\web;

use nano\Components\Web\Controller;
use nano\Components\Web\Response;
use nano\Interfaces\Web\ResponseInterface;

/**
 *  class `PingController`
 */
class PingController extends Controller
{
    /**
     * @return array
     */
    public function index(): array
    {
        Response::$format = ResponseInterface::FORMAT_JSON;

        return ['pong'];
    }

}