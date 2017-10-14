<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bron".
 *
 * @property integer $id
 * @property integer $preparat_id
 * @property integer $apteka_id
 * @property integer $sum
 * @property integer $kolvo
 * @property string $text
 * @property integer $date
 *
 * @property Apteka $apteka
 * @property Preparat $preparat
 */
class Bron extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bron';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['preparat_id', 'apteka_id'], 'required'],
            [['preparat_id', 'apteka_id', 'sum', 'kolvo', 'date'], 'integer'],
            [['text'], 'string'],
            [['apteka_id'], 'exist', 'skipOnError' => true, 'targetClass' => Apteka::className(), 'targetAttribute' => ['apteka_id' => 'id']],
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
            'apteka_id' => Yii::t('app', 'Аптека'),
            'sum' => Yii::t('app', 'Сумма'),
            'kolvo' => Yii::t('app', 'Количество'),
            'text' => Yii::t('app', 'Текст'),
            'date' => Yii::t('app', 'Дата'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApteka()
    {
        return $this->hasOne(Apteka::className(), ['id' => 'apteka_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreparat()
    {
        return $this->hasOne(Preparat::className(), ['id' => 'preparat_id']);
    }
}
