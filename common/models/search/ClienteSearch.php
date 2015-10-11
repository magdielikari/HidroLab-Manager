<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form about `common\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Celular', 'Contador', 'Codigo_id'], 'integer'],
            [['Nombre', 'Direccion', 'Email', 'Encargado', 'NRif', 'CRif', 'Siglas'], 'safe'],
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
        $query = Cliente::find();

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
            'Celular' => $this->Celular,
            'Contador' => $this->Contador,
            'Codigo_id' => $this->Codigo_id,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Encargado', $this->Encargado])
            ->andFilterWhere(['like', 'NRif', $this->NRif])
            ->andFilterWhere(['like', 'CRif', $this->CRif])
            ->andFilterWhere(['like', 'Siglas', $this->Siglas]);

        return $dataProvider;
    }
}
