<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostopredeterminadosHasCostomuestra;

/**
 * CostopredeterminadosHasCostomuestraSearch represents the model behind the search form about `common\models\CostopredeterminadosHasCostomuestra`.
 */
class CostopredeterminadosHasCostomuestraSearch extends CostopredeterminadosHasCostomuestra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'CostoMuestra_id'], 'integer'],
            [['cantidad'], 'number'],
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
        $query = CostopredeterminadosHasCostomuestra::find();

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
            'CostoMuestra_id' => $this->CostoMuestra_id,
            'cantidad' => $this->cantidad,
        ]);

        return $dataProvider;
    }
}
