<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bolnica */

$this->title = Yii::t('app', 'Редактировать {modelClass}: ', [
    'modelClass' => 'больницу',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Больницы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Редактировать');
?>
<div class="bolnica-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
