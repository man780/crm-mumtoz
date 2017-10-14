<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prodat */

$this->title = Yii::t('app', 'Добавить продажы');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Продажы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
