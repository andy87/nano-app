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
     * @url /ping/
     *
     * @return string
     */
    public function index(): string
    {
        Response::setupFormat(ResponseInterface::FORMAT_RAW);

        return 'pong';
    }

    /**
     * @url /ping/as-json
     *
     * @return array
     */
    public function as_json(): array
    {
        Response::$format = Response::FORMAT_JSON;

        return ['pong'];
    }
}