<?php
namespace app\controllers;

use app\models\Arts;
use app\models\ArtsForm;
use app\models\Blog;
use app\models\BlogForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Maintext;
use app\models\MaintextForm;
use app\models\Works;
use app\models\WorksForm;

class OncadminController extends Controller 
{

	//public $layout = 'admin';

	 public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login'],
                'rules' => [
                	[
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
    	$this->layout = 'admin';
    	if (!Yii::$app->user->isGuest) {	    	
	        return $this->render('main');
	    } else {        
            //return $this->render('login', ['model' => new LoginForm]);
            return $this->redirect('/site/login',302);
        }
    }

    public function actionMaintext()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login',302);
        }
        $this->layout = 'admin';
        $query = MaintextForm::findOne(1);
        if (!$query){
            $query = new MaintextForm();
        }
        $model = new Maintext;
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $query->text=$model->text;
            $query->quote=$model->quote;
            $query->author=$model->author;
            $query->save();
        }else {
            return $this->render('maintext',['model'=>$model, 'query'=>$query]);
        }
        return $this->render('maintext',['model'=>$model, 'query'=>$query]);
    }

    public function actionWorks()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login',302);
        }

        $this->layout = 'admin';
        $success = false;
        $id = Yii::$app->request->get('id');
        $query = Works::find()->all();
        $model = new WorksForm();

        if ($id){
            $nquery = Works::findOne($id);
            if ($model->load(Yii::$app->request->post()) && $model->validate() && $id !== 'new'){
                $nquery->title=$model->title;
                $nquery->text=$model->text;
                $nquery->tag=$model->tag;
                $nquery->picture=$model->picture;
                $nquery->slug=$model->slug;
                $nquery->save();
                $success = true;
            }
            if($id == 'new'){
                $nquery = new Works();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    $nquery->title = $model->title;
                    $nquery->text = $model->text;
                    $nquery->tag = $model->tag;
                    $nquery->picture = $model->picture;
                    $nquery->slug = $model->slug;
                    $nquery->save();
                    $success = true;
                }
            }
            return $this->render('editWork', ['nquery'=>$nquery, 'id'=>$id, 'model'=>$model, 'success'=>$success]);
        }else {
            return $this->render('works', ['query'=>$query]);
        }
    }

    public function actionArts(){
        $this->layout = 'admin';
        $success = false;
        $id = Yii::$app->request->get('id');
        $query = Arts::find()->all();
        $model = new ArtsForm();
        if ($id){
            $nquery = Arts::findOne($id);
            if ($model->load(Yii::$app->request->post()) && $model->validate() && $id !== 'new'){
                $nquery->title=$model->title;
                $nquery->text=$model->text;
                $nquery->tag=$model->tag;
                $nquery->picture=$model->picture;
                $nquery->slug=$model->slug;
                $nquery->cut=$model->cut;
                $nquery->save();
                $success = true;
            }
            if($id == 'new'){
                $nquery = new Arts();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    $nquery->title = $model->title;
                    $nquery->text = $model->text;
                    $nquery->tag = $model->tag;
                    $nquery->picture = $model->picture;
                    $nquery->slug = $model->slug;
                    $nquery->cut=$model->cut;
                    $nquery->save();
                    $success = true;
                }
            }
            return $this->render('editArt', ['nquery'=>$nquery, 'id'=>$id, 'model'=>$model, 'success'=>$success]);
        }else {
            return $this->render('arts', ['query'=>$query]);
        }

    }

    public function actionBlog(){
        $this->layout = 'admin';
        $query = Blog::find()->orderBy('time')->all();
        $success = false;
        $id = Yii::$app->request->get('id');
        $model = new BlogForm();
        if ($id){
            $nquery = Blog::findOne($id);
            if ($model->load(Yii::$app->request->post()) && $model->validate() && $id !== 'new'){
                $nquery->title=$model->title;
                $nquery->text=$model->text;
                $nquery->slug=$model->slug;
                $nquery->cut=$model->cut;
                $nquery->save();
                $success = true;
            }
            if($id == 'new'){
                $nquery = new Blog();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    $nquery->title = $model->title;
                    $nquery->text = $model->text;
                    $nquery->slug = $model->slug;
                    $nquery->cut=$model->cut;
                    $nquery->save();
                    $success = true;
                }
            }
            return $this->render('editBlog', ['nquery'=>$nquery, 'id'=>$id, 'model'=>$model, 'success'=>$success]);
        }else {
            return $this->render('blog', ['query'=>$query]);
        }

    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionMaterials()
    {

    }

}