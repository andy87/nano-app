<?php

namespace app\controllers\web;

use nano\Components\Web\Controller;
use nano\Components\Web\Response;
use nano\Interfaces\Web\ResponseInterface;

/**
 *  class `PingController`
 */
class CartController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        Response::$format = ResponseInterface::FORMAT_RAW;

        return 'pong';
    }

}