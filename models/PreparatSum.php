<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preparat_sum".
 *
 * @property integer $id
 * @property integer $preparat_id
 * @property double $sum_in
 * @property double $sum_out
 * @property integer $date
 *
 * @property Preparat $preparat
 */
class PreparatSum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preparat_sum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['preparat_id'], 'required'],
            [['preparat_id', 'date'], 'integer'],
            [['sum_in', 'sum_out'], 'number'],
            [['preparat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Preparat::className(), 'targetAttribute' => ['preparat_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '№'),
            'preparat_id' => Yii::t('app', 'Препарат'),
            'sum_in' => Yii::t('app', 'Сумма (покупки)'),
            'sum_out' => Yii::t('app', 'Сумма (Продажи)'),
            'date' => Yii::t('app', 'Дата'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreparat()
    {
        return $this->hasOne(Preparat::className(), ['id' => 'preparat_id']);
    }
}
