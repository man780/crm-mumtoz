<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Preparat */

$this->title = Yii::t('app', 'Редактировать {modelClass}: ', [
    'modelClass' => 'препарат',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Препараты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Редактировать');
?>
<div class="preparat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
