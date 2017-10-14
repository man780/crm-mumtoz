<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Preparat */

$this->title = Yii::t('app', 'Добавить препарат');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Препараты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preparat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
