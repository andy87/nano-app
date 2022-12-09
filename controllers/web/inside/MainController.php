<?php

namespace app\controllers\web\inside;

use nano\components\web\Controller;
use nano\Components\Web\Exceptions\TemplateException;

/**
 *  class `MainController`
 */
class MainController extends Controller
{
    /**
     * action `view`
     *
     * @return string
     * @throws TemplateException
     */
    public function view(): string
    {
        return $this->render('view', [
            'class' => __CLASS__,
            'method' => __METHOD__,
        ]);
    }
}