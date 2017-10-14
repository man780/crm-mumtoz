<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prodat */

$this->title = Yii::t('app', 'Редактировать {modelClass}: ', [
    'modelClass' => 'продажу',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Продажы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Редактировать');
?>
<div class="prodat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
