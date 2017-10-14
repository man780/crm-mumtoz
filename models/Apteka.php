<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apteka".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $address
 * @property string $telefon
 *
 * @property Bron[] $brons
 * @property Prodat[] $prodats
 */
class Apteka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apteka';
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
    public function getBrons()
    {
        return $this->hasMany(Bron::className(), ['apteka_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdats()
    {
        return $this->hasMany(Prodat::className(), ['apteka_id' => 'id']);
    }
}
