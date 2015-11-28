<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostopredeterminadosHasParametros;

/**
 * CostopredeterminadosHasParametrosSearch represents the model behind the search form about `common\models\CostopredeterminadosHasParametros`.
 */
class CostopredeterminadosHasParametrosSearch extends CostopredeterminadosHasParametros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'Parametros_id'], 'integer'],
            [['cantidad', 'k'], 'number'],
            [['unidad'], 'safe'],
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
        $query = CostopredeterminadosHasParametros::find();

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
            'CostoPredeterminados_id' => $this->CostoPredeterminados_id,
            'Parametros_id' => $this->Parametros_id,
            'cantidad' => $this->cantidad,
            'k' => $this->k,
        ]);

        $query->andFilterWhere(['like', 'unidad', $this->unidad]);

        return $dataProvider;
    }
}
