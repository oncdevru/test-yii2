<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 16.10.2016
 * Time: 12:40
 */

namespace app\models;


use yii\base\Model;

class ArtsForm extends Model
{
    public $text;
    public $title;
    public $tag;
    public $picture;
    public $slug;
    public $cut;

    public function rules()
    {
        return [
            [['text', 'title','tag', 'picture', 'slug', 'cut'], 'required'],
        ];
    }
}