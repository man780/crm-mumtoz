<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preparat".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * @property Bron[] $brons
 * @property PreparatSum[] $preparatSums
 * @property Prodat[] $prodats
 */
class Preparat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preparat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '№'),
            'name' => Yii::t('app', 'Наименования препарата'),
            'description' => Yii::t('app', 'Описания препарата'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrons()
    {
        return $this->hasMany(Bron::className(), ['preparat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreparatSums()
    {
        return $this->hasMany(PreparatSum::className(), ['preparat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdats()
    {
        return $this->hasMany(Prodat::className(), ['preparat_id' => 'id']);
    }
}
