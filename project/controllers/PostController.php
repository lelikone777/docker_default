<?php


namespace app\controllers;

use Yii;
class PostController extends AppController
{

//Устонавливаем шаблон для вывода страниц только для этого контроллера
    public $layout = 'basic';

    public function actionTest() {
        return $this->render('test');
    }

    public function actionShow() {

//Устонавливаем шаблон только для этой страницы
//        $this->layout = 'basic';

        return $this->render('show');
    }
}