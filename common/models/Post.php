<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/** @property integer $id */
/** @property string $title */
/** @property string $body */
/** @property integer $user_id */

/** @property string $created_at */
class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'posts';
    }

    public function rules()
    {
        return [
            [['title', 'body'], 'required'],
            ['user_id', 'default', 'value' => Yii::$app->user->id]
        ];
    }
}