<?php


namespace app\controllers;

use Yii;
class PostController extends AppController
{

//Устонавливаем шаблон для вывода страниц только для этого контроллера
    public $layout = 'basic';

    public function actionIndex() {
        if (Yii::$app->request->isAjax) {
            debug($_GET);
            return 'test';
        }
        return $this->render('index');
    }

    public function actionShow() {

//Устонавливаем шаблон только для этой страницы
//        $this->layout = 'basic';

        return $this->render('show');
    }
}