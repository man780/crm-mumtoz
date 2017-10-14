<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VrachSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Vraches');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vrach-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Vrach'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'bolnica_id',
            'position_id',
            'fio',
            'telefon',
            // 'adres',
            // 'text:ntext',
            // 'potencial_mesyac',
            // 'data_rojdeniya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
