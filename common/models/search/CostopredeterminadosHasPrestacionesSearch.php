<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostopredeterminadosHasPrestaciones;

/**
 * CostopredeterminadosHasPrestacionesSearch represents the model behind the search form about `common\models\CostopredeterminadosHasPrestaciones`.
 */
class CostopredeterminadosHasPrestacionesSearch extends CostopredeterminadosHasPrestaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'Prestaciones_id', 'Constantes_id'], 'integer'],
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
        $query = CostopredeterminadosHasPrestaciones::find();

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
            'Prestaciones_id' => $this->Prestaciones_id,
            'Constantes_id' => $this->Constantes_id,
        ]);

        return $dataProvider;
    }
}
