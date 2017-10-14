<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vrach */

$this->title = Yii::t('app', 'Добавить врача');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Врачи'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vrach-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
