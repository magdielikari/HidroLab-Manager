<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Vendedor;

/**
 * VendedorSearch represents the model behind the search form about `common\models\Vendedor`.
 */
class VendedorSearch extends Vendedor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Puesto_id', 'user_id', 'Departamento_id'], 'integer'],
            [['nombre', 'email'], 'safe'],
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
        $query = Vendedor::find();

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
            'Puesto_id' => $this->Puesto_id,
            'user_id' => $this->user_id,
            'Departamento_id' => $this->Departamento_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
