<?php


namespace frontend\controllers;


use yii\web\Controller;

class TopicController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index");
    }
}