<?php

namespace app\controllers;

use nano\components\web\Controller;

/**
 *
 */
class SiteController extends Controller
{
    /**
     * action `endex`
     * @return string
     */
    public function index(): string
    {
        return $this->render('', []);
    }
}