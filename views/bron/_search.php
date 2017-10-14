<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BronSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bron-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'preparat_id') ?>

    <?= $form->field($model, 'apteka_id') ?>

    <?= $form->field($model, 'sum') ?>

    <?= $form->field($model, 'kolvo') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
