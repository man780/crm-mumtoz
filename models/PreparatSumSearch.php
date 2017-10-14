<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PreparatSum;

/**
 * PreparatSumSearch represents the model behind the search form about `app\models\PreparatSum`.
 */
class PreparatSumSearch extends PreparatSum
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'preparat_id', 'date'], 'integer'],
            [['sum_in', 'sum_out'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PreparatSum::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'preparat_id' => $this->preparat_id,
            'sum_in' => $this->sum_in,
            'sum_out' => $this->sum_out,
            'date' => $this->date,
        ]);

        return $dataProvider;
    }
}
