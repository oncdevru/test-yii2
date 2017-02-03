<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 17.10.2016
 * Time: 20:15
 */

namespace app\controllers;

use app\models\Blog;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;


class BlogController extends Controller
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

    public function actionIndex()
    {
        $model = Blog::find()->orderBy(['time'=>SORT_DESC]);
        $slug = Yii::$app->request->get('entry');
        if ($slug) {
            $bmodel = $model = Blog::findOne(['slug' => $slug]);
            return $this->render('fullBlog', ['bmodel' => $bmodel, 'slug' => $slug]);
        } else {
            $pages = new Pagination(['totalCount' => $model->count(), 'pageSize' => 9]);
            $pages->pageSizeParam = false;
            $lmodel = $model->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
            return $this->render('all', ['lmodel' => $lmodel, 'pages' => $pages,]);
        }
    }



}