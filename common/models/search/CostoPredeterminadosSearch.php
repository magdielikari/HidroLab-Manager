<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Costopredeterminados;

/**
 * CostopredeterminadosSearch represents the model behind the search form about `common\models\Costopredeterminados`.
 */
class CostopredeterminadosSearch extends Costopredeterminados
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vencimiento', 'Moneda_id'], 'integer'],
            [['nombre', 'fechaIngreso', 'tipo'], 'safe'],
            [['costo'], 'number'],
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
        $query = Costopredeterminados::find();

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
            'costo' => $this->costo,
            'fechaIngreso' => $this->fechaIngreso,
            'vencimiento' => $this->vencimiento,
            'Moneda_id' => $this->Moneda_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
