<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vrach;

/**
 * VrachSearch represents the model behind the search form about `app\models\Vrach`.
 */
class VrachSearch extends Vrach
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bolnica_id', 'position_id', 'data_rojdeniya'], 'integer'],
            [['fio', 'telefon', 'adres', 'text', 'potencial_mesyac'], 'safe'],
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
        $query = Vrach::find();

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
            'bolnica_id' => $this->bolnica_id,
            'position_id' => $this->position_id,
            'data_rojdeniya' => $this->data_rojdeniya,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'potencial_mesyac', $this->potencial_mesyac]);

        return $dataProvider;
    }
}
