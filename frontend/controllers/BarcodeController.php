<?php

namespace frontend\controllers;

class BarcodeController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionSeachbylot() {

        $lotdetail = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

        return $this->render('SeachBylot', $lotdetail);
    }
    
}
