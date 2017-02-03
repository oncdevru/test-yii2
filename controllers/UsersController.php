<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 12.10.2016
 * Time: 18:25
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\Users;


class UsersController extends Controller
{

    public function actionIndex(){
        $users = Users::find()->all();
        return $this->render('index', ['users'=>$users]);
    }
}