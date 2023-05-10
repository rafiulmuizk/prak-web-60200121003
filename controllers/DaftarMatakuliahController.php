<?php

namespace app\controllers;

class DaftarMatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionView()
    {
        return $this->render('view');
    }
    public function actionUpdate()
    {
        return $this->render('update');
    }
    public function actionDelete()
    {
        return $this->render('delete');
    }

}
