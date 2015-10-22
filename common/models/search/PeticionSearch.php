<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Peticion;

/**
 * PeticionSearch represents the model behind the search form about `common\models\Peticion`.
 */
class PeticionSearch extends Peticion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fVencimiento', 'Referencia_id', 'Costos_id', 'Costos_General_id', 'Costos_CostoParametro_id', 'Costos_CostoParametro_Parametros_id', 'Costos_CostoMuestra_id', 'General_id', 'Muestras_id'], 'integer'],
            [['fPeticion', 'cadena', 'fCreacion'], 'safe'],
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
        $query = Peticion::find();

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
            'fPeticion' => $this->fPeticion,
            'fVencimiento' => $this->fVencimiento,
            'fCreacion' => $this->fCreacion,
            'Referencia_id' => $this->Referencia_id,
            'Costos_id' => $this->Costos_id,
            'Costos_General_id' => $this->Costos_General_id,
            'Costos_CostoParametro_id' => $this->Costos_CostoParametro_id,
            'Costos_CostoParametro_Parametros_id' => $this->Costos_CostoParametro_Parametros_id,
            'Costos_CostoMuestra_id' => $this->Costos_CostoMuestra_id,
            'General_id' => $this->General_id,
            'Muestras_id' => $this->Muestras_id,
        ]);

        $query->andFilterWhere(['like', 'cadena', $this->cadena]);

        return $dataProvider;
    }
}
