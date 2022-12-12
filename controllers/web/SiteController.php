<?php

namespace app\controllers\web;

use nano\components\web\Controller;
use nano\Components\Web\Exceptions\TemplateException;

/**
 *  class `SiteController`
 */
class SiteController extends Controller
{
    /**
     * action `index`
     * @return string
     */
    public function index(): string
    {
        return $this->render('index', [
            'class' => __CLASS__,
            'method' => __METHOD__,
        ]);
    }
}