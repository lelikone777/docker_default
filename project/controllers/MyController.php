<?php


namespace app\controllers;


class MyController extends AppController
{
    public function actionMy($id=123) {

        $hi = 'HI!!!';
        $var = 123;
        $arr = ['1','2','3'];



//          Первый из вариантов передачи переменной
//        return $this->render('index', [
//            'hi'=> $hi,
//            'names' => $names
//        ]);


//        Второй вариант - более предпочтительный
        return $this->render('my', compact('hi', 'arr', 'var', 'id'));

    }
}