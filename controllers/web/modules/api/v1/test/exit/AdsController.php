<?php

namespace app\controllers\web\modules\api\v1\test\exit;

use nano\Components\Web\Controller;

/**
 *
 */
class AdsController extends Controller
{
    /**
     * @return string
     */
    public function xxx(): string
    {
        return $this->render('xxx',['text' => __FILE__]);
    }
}