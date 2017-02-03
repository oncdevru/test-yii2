<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 17.10.2016
 * Time: 20:21
 */

namespace app\models;


use yii\base\Model;

class BlogForm extends Model
{
    public $text;
    public $title;
    public $slug;
    public $cut;

    public function rules()
    {
        return [
            [['text', 'title', 'slug', 'cut'], 'required'],
        ];
    }
}