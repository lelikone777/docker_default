<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionUser() {
        return $this->render('user');
    }

    public function actionIndex() {
        return $this->render('index');
    }

}