<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bolnica".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $address
 * @property string $telefon
 *
 * @property Vrach[] $vraches
 */
class Bolnica extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bolnica';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['name', 'address', 'telefon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '№'),
            'name' => Yii::t('app', 'Наименования'),
            'text' => Yii::t('app', 'Текст'),
            'address' => Yii::t('app', 'Адрес'),
            'telefon' => Yii::t('app', 'Телефон'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVraches()
    {
        return $this->hasMany(Vrach::className(), ['bolnica_id' => 'id']);
    }
}
