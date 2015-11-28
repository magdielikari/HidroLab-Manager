<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ParametrosHasMuestrasHasCostopredeterminados;

/**
 * ParametrosHasMuestrasHasCostopredeterminadosSearch represents the model behind the search form about `common\models\ParametrosHasMuestrasHasCostopredeterminados`.
 */
class ParametrosHasMuestrasHasCostopredeterminadosSearch extends ParametrosHasMuestrasHasCostopredeterminados
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Parametros_has_Muestras_Parametros_id', 'Parametros_has_Muestras_Muestras_id', 'CostoPredeterminados_id'], 'integer'],
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
        $query = ParametrosHasMuestrasHasCostopredeterminados::find();

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
            'Parametros_has_Muestras_Parametros_id' => $this->Parametros_has_Muestras_Parametros_id,
            'Parametros_has_Muestras_Muestras_id' => $this->Parametros_has_Muestras_Muestras_id,
            'CostoPredeterminados_id' => $this->CostoPredeterminados_id,
        ]);

        return $dataProvider;
    }
}
