<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Ordencompra;

/**
 * OrdencompraSearch represents the model behind the search form about `common\models\Ordencompra`.
 */
class OrdencompraSearch extends Ordencompra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Peticion_id'], 'integer'],
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
        $query = Ordencompra::find();

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
            'Peticion_id' => $this->Peticion_id,
        ]);

        $query->andFilterWhere(['like', 'nOrden', $this->nOrden])
            ->andFilterWhere(['like', 'ubicacion', $this->ubicacion])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
