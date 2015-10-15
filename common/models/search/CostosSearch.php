<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Costos;

/**
 * CostosSearch represents the model behind the search form about `common\models\Costos`.
 */
class CostosSearch extends Costos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rendimiento', 'General_id', 'CostoParametro_id', 'CostoParametro_Parametros_id', 'CostoMuestra_id'], 'integer'],
            [['cAnalisis', 'cMuestreo', 'cInforme', 'cAdministrativo', 'utilidad'], 'number'],
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
        $query = Costos::find();

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
            'cAnalisis' => $this->cAnalisis,
            'cMuestreo' => $this->cMuestreo,
            'cInforme' => $this->cInforme,
            'cAdministrativo' => $this->cAdministrativo,
            'utilidad' => $this->utilidad,
            'rendimiento' => $this->rendimiento,
            'General_id' => $this->General_id,
            'CostoParametro_id' => $this->CostoParametro_id,
            'CostoParametro_Parametros_id' => $this->CostoParametro_Parametros_id,
            'CostoMuestra_id' => $this->CostoMuestra_id,
        ]);

        return $dataProvider;
    }
}
