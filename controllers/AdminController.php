<?php

namespace app\controllers;

use yii\web\Controller;

class AdminController extends Controller
{
    public function actions()
    {
        $this->layout = '@app/views/layouts/admin-main.php';
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogs()
    {
        return $this->render('logs');
    }

    public function actionReports()
    {
        return $this->render('reports');
    }

}
