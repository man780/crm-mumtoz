<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vrach_preparat".
 *
 * @property integer $vrach_id
 * @property integer $preparat_id
 * @property string $created_at
 *
 * @property Preparat $preparat
 * @property Vrach $vrach
 */
class VrachPreparat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vrach_preparat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vrach_id', 'preparat_id'], 'required'],
            [['vrach_id', 'preparat_id'], 'integer'],
            [['created_at'], 'safe'],
            [['preparat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Preparat::className(), 'targetAttribute' => ['preparat_id' => 'id']],
            [['vrach_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vrach::className(), 'targetAttribute' => ['vrach_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vrach_id' => Yii::t('app', 'Vrach ID'),
            'preparat_id' => Yii::t('app', 'Preparat ID'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreparat()
    {
        return $this->hasOne(Preparat::className(), ['id' => 'preparat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVrach()
    {
        return $this->hasOne(Vrach::className(), ['id' => 'vrach_id']);
    }
}
