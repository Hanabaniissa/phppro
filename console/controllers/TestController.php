<?php
// First Commit
// second co
namespace console\controllers;

use common\models\Post;
use Redis;
use Yii;

class TestController extends \yii\console\Controller
{
    public function actionRedis()
    {


        $redis= Yii::$app->redis;
        $redis->lpush('ctt', 'key1', 'val1', 'key2', 'val2');
var_dump($redis->lrange('ctt',0,-1));
        //var-dump(\Yii::$app->redis->get('name'));

     //   \Yii::$app->redis->set('hana',4);
//

       //var_dump(\Yii::$app->redis->get('hh'));
//        var_dump(\Yii::$app->redis->lrange("tutorial-list", 0 ,1));
//        var_dump(\Yii::$app->redis->get('hana'));

    }

    private function getPosts()
    {
        $redis = new Redis();
        $posts = $redis->get('posts');
        if (empty($posts)) {
            $posts = Post::find()->all();
            $redis->set('posts', $posts);
        }
        return $posts;
    }
}
