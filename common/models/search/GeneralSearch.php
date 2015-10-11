<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\General;

/**
 * GeneralSearch represents the model behind the search form about `common\models\General`.
 */
class GeneralSearch extends General
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Copias', 'Departamento_id', 'Decreto_id', 'Clientes_id', 'Vendedor_id'], 'integer'],
            [['Caudal', 'Analisis'], 'safe'],
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
        $query = General::find();

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
            'id' => $this->id,
            'Copias' => $this->Copias,
            'Departamento_id' => $this->Departamento_id,
            'Decreto_id' => $this->Decreto_id,
            'Clientes_id' => $this->Clientes_id,
            'Vendedor_id' => $this->Vendedor_id,
        ]);

        $query->andFilterWhere(['like', 'Caudal', $this->Caudal])
            ->andFilterWhere(['like', 'Analisis', $this->Analisis]);

        return $dataProvider;
    }
}
