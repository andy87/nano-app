<?php

namespace app\controllers\web\modules\api\v1\main_test\ok;

use nano\Components\Web\Controller;
use nano\Components\Web\Exceptions\TemplateException;

class AdsYandexController extends Controller
{
    /**
     *
     * modules/api/v1/main-test/ok/ads-yandex/create
     *
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