<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VrachSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vrach-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bolnica_id') ?>

    <?= $form->field($model, 'position_id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'telefon') ?>

    <?php // echo $form->field($model, 'adres') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'potencial_mesyac') ?>

    <?php // echo $form->field($model, 'data_rojdeniya') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
