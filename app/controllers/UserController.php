<?php


namespace app\controllers;


use app\models\Data;

class UserController
{

    public function actionIndex()
    {
        $model = new Data();
        $model = $model->get();
    }

    public function actionShow($id)
    {

    }

    public function update($id, $data)
    {

    }

    public function store($data)
    {

    }

    public function delete($id)
    {

    }

}
