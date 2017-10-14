<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bolnica */

$this->title = Yii::t('app', 'Добавить больницу');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Больницы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolnica-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
