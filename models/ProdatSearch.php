<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prodat;

/**
 * ProdatSearch represents the model behind the search form about `app\models\Prodat`.
 */
class ProdatSearch extends Prodat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'preparat_id', 'apteka_id', 'sum', 'kolvo', 'date'], 'integer'],
            [['text'], 'safe'],
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
        $query = Prodat::find();

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
            'apteka_id' => $this->apteka_id,
            'sum' => $this->sum,
            'kolvo' => $this->kolvo,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
