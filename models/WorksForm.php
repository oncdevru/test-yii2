<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 14.10.2016
 * Time: 13:42
 */

namespace app\models;

use yii\base\Model;


class WorksForm extends Model
{
    public $text;
    public $title;
    public $tag;
    public $picture;
    public $slug;

    public function rules()
    {
        return [
            [['text', 'title','tag', 'picture', 'slug'], 'required'],
        ];
    }

}