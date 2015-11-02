<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\GeneralHasSubtipo;

/**
 * GeneralHasSubtipoSearch represents the model behind the search form about `common\models\GeneralHasSubtipo`.
 */
class GeneralHasSubtipoSearch extends GeneralHasSubtipo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['General_id', 'SubTipo_id'], 'integer'],
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
        $query = GeneralHasSubtipo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'General_id' => $this->General_id,
            'SubTipo_id' => $this->SubTipo_id,
        ]);

        return $dataProvider;
    }
}
