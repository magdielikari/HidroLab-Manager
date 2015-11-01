<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Clientes;

/**
 * ClientesSearch represents the model behind the search form about `common\models\Clientes`.
 */
class ClientesSearch extends Clientes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'contador'], 'integer'],
            [['nombre', 'direccion', 'email', 'encargado', 'nRif', 'cRif', 'siglas'], 'safe'],
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
        $query = Clientes::find();

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
            'contador' => $this->contador,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'encargado', $this->encargado])
            ->andFilterWhere(['like', 'nRif', $this->nRif])
            ->andFilterWhere(['like', 'cRif', $this->cRif])
            ->andFilterWhere(['like', 'siglas', $this->siglas]);

        return $dataProvider;
    }
}
