<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bron */

$this->title = Yii::t('app', 'Добавить бронь');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Брони'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bron-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
