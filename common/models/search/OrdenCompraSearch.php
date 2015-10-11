<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrdenCompra;

/**
 * OrdenCompraSearch represents the model behind the search form about `common\models\OrdenCompra`.
 */
class OrdenCompraSearch extends OrdenCompra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'peticion_id'], 'integer'],
            [['nOrden', 'ubicacion', 'observaciones', 'estado'], 'safe'],
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
        $query = OrdenCompra::find();

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
            'peticion_id' => $this->peticion_id,
        ]);

        $query->andFilterWhere(['like', 'nOrden', $this->nOrden])
            ->andFilterWhere(['like', 'ubicacion', $this->ubicacion])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
