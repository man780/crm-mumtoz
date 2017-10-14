<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Preparat;
use app\models\Apteka;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Prodat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?
    $list = Preparat::find()->all();
    $items = ArrayHelper::map($list,'id','name');
    $params = [
        'prompt' => 'Выберите препарат'
    ];
    echo $form->field($model, 'preparat_id')->dropDownList($items,$params);?>

    <?
    $list = Apteka::find()->all();
    $items = ArrayHelper::map($list,'id','name');
    $params = [
        'prompt' => 'Выберите аптеку'
    ];
    echo $form->field($model, 'apteka_id')->dropDownList($items,$params);?>

    <?= $form->field($model, 'sum')->textInput() ?>

    <?= $form->field($model, 'kolvo')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?echo '<label>Дата</label>';
        echo DatePicker::widget([
            'name' => 'date',
            'value' => $model->date,
            'options' => ['placeholder' => 'Выберите дату ...'],
            'pluginOptions' => [
                'format' => 'dd.mm.yyyy',
                'todayHighlight' => true
            ]
        ]); ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
