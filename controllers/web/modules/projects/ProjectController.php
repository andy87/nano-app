<?php

namespace app\controllers\web\modules\projects;

use nano\Components\Web\Controller;
use nano\Components\Web\Exceptions\TemplateException;

/**
 *
 */
class ProjectController extends Controller
{
    /**
     * @return string
     * @throws TemplateException
     */
    public function create(): string
    {
        return $this->render('create', [
            'class' => __CLASS__,
            'method' => __METHOD__,
        ]);
    }
}