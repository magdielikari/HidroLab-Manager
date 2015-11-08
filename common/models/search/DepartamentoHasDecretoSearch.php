<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DepartamentoHasDecreto;

/**
 * DepartamentoHasDecretoSearch represents the model behind the search form about `common\models\DepartamentoHasDecreto`.
 */
class DepartamentoHasDecretoSearch extends DepartamentoHasDecreto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Departamento_id', 'Decreto_id'], 'safe'],
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
        $query = DepartamentoHasDecreto::find();

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
            'Departamento_id' => $this->Departamento_id,
            'Decreto_id' => $this->Decreto_id,
        ]);

        return $dataProvider;
    }
}
