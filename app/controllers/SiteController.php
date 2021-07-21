<?php

namespace app\controllers;


use app\models\Data;
use core\View;

class SiteController
{
    public function actionIndex()
    {

        View::render('index');
    }

    public function actionData() :void
    {
        $model = new Data();
        $model = $model->get();
        View::render('data', ['array' => $model]);
    }

    public function actionParams($integer, $string, $mehrubon)
    {
        var_dump($integer, $string);
    }
}
