<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 14.10.2016
 * Time: 19:50
 */

namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Works;
use yii\data\Pagination;


class WorksController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update'],
                'rules' => [
                    // deny all POST requests
                    [
                        'allow' => false,
                        'verbs' => ['POST']
                    ],
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex(){

        $lmodel = Works::find()->orderBy(['time'=>SORT_DESC]);
        $tag = Yii::$app->request->get('tag');
        $slug = Yii::$app->request->get('entry');
        if($tag){
            $trmodel = Works::find()->where(['tag'=>$tag])->orderBy(['time'=>SORT_DESC]);
            $trrmodel = clone $trmodel;
            $pages = new Pagination(['totalCount' => $trrmodel->count(), 'pageSize' => 9]);
            $pages->pageSizeParam = false;
            $tmodel = $trmodel->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
            return $this->render('tagged', ['tmodel'=>$tmodel, 'tag'=>$tag, 'pages' => $pages,]);
        }else {
            if ($slug){
                $ltmodel = Works::findOne(['slug'=>$slug]);
                return $this->render('fullWork', ['ltmodel'=>$ltmodel, 'slug'=>$slug]);
            }
            $pages = new Pagination(['totalCount' => $lmodel->count(), 'pageSize' => 9]);
            $pages->pageSizeParam = false;
            $model = $lmodel->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
            return $this->render('all', ['model'=>$model,'pages' => $pages,]);
        }
    }

}