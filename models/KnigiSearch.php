<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Knigi;

/**
 * KnigiSearch represents the model behind the search form of `app\models\Knigi`.
 */
class KnigiSearch extends Knigi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'год_выпуска', 'количество_страниц'], 'integer'],
            [['название', 'автор', 'жанр'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Knigi::find();

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
            'год_выпуска' => $this->год_выпуска,
            'количество_страниц' => $this->количество_страниц,
        ]);

        $query->andFilterWhere(['like', 'название', $this->название])
            ->andFilterWhere(['like', 'автор', $this->автор])
            ->andFilterWhere(['like', 'жанр', $this->жанр]);

        return $dataProvider;
    }
}
