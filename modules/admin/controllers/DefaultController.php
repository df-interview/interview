<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

use app\modules\admin\controllers\AbstractAdminController;

class DefaultController extends AbstractAdminController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}