<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PreparatSum */

$this->title = Yii::t('app', 'Create Preparat Sum');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Preparat Sums'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preparat-sum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
