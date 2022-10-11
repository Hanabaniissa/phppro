<?php

use yii\widgets\ActiveForm;

/** @var \common\models\Post $post */

$this->title = 'Yii2';
?>
<div class="site-index">


    <h1>create post</h1>
    <div class="body-content">
        <?php $form = ActiveForm::begin() ?>
        <div class="row">
            <div class="for-control">
                <div class="col-lg-6">
                    <?= $form->field($post, 'title'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="for-control">
                <div class="col-lg-6">
                    <?= $form->field($post, 'body')->textarea(); ?>
                </div>
            </div>
        </div>
        <br>
        <?= \yii\helpers\Html::submitButton("Post") ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>