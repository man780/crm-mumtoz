<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vrach".
 *
 * @property integer $id
 * @property integer $bolnica_id
 * @property integer $position_id
 * @property string $fio
 * @property string $telefon
 * @property string $adres
 * @property string $text
 * @property string $potencial_mesyac
 * @property integer $data_rojdeniya
 *
 * @property Position $position
 * @property Bolnica $bolnica
 */
class Vrach extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vrach';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bolnica_id'], 'required'],
            [['bolnica_id', 'position_id', 'data_rojdeniya'], 'integer'],
            [['text'], 'string'],
            [['fio', 'telefon', 'adres', 'potencial_mesyac'], 'string', 'max' => 255],
            [['position_id'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position_id' => 'id']],
            [['bolnica_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bolnica::className(), 'targetAttribute' => ['bolnica_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'bolnica_id' => Yii::t('app', 'Больница'),
            'position_id' => Yii::t('app', 'Должность'),
            'fio' => Yii::t('app', 'ФИО'),
            'telefon' => Yii::t('app', 'Telefon'),
            'adres' => Yii::t('app', 'Adres'),
            'text' => Yii::t('app', 'Текст'),
            'potencial_mesyac' => Yii::t('app', 'Потенциал/месяц'),
            'data_rojdeniya' => Yii::t('app', 'Дата рождения'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBolnica()
    {
        return $this->hasOne(Bolnica::className(), ['id' => 'bolnica_id']);
    }
}
