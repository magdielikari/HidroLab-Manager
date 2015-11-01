<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostopredeterminadosHasCostoparametro;

/**
 * CostopredeterminadosHasCostoparametroSearch represents the model behind the search form about `common\models\CostopredeterminadosHasCostoparametro`.
 */
class CostopredeterminadosHasCostoparametroSearch extends CostopredeterminadosHasCostoparametro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'CostoParametro_id'], 'integer'],
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
        $query = CostopredeterminadosHasCostoparametro::find();

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
            'CostoParametro_id' => $this->CostoParametro_id,
            'cantidad' => $this->cantidad,
            'k' => $this->k,
        ]);

        $query->andFilterWhere(['like', 'unidad', $this->unidad]);

        return $dataProvider;
    }
}
