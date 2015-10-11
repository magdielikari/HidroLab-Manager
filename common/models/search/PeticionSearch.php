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
            [['id', 'fVencimiento', 'referencia_id', 'costos_id', 'costos_General_id', 'costos_CostoParametro_id', 'costos_CostoParametro_Parametros_id', 'costos_costoMuestra_id', 'General_id', 'Muestras_id'], 'integer'],
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
            'referencia_id' => $this->referencia_id,
            'costos_id' => $this->costos_id,
            'costos_General_id' => $this->costos_General_id,
            'costos_CostoParametro_id' => $this->costos_CostoParametro_id,
            'costos_CostoParametro_Parametros_id' => $this->costos_CostoParametro_Parametros_id,
            'costos_costoMuestra_id' => $this->costos_costoMuestra_id,
            'General_id' => $this->General_id,
            'Muestras_id' => $this->Muestras_id,
        ]);

        $query->andFilterWhere(['like', 'cadena', $this->cadena]);

        return $dataProvider;
    }
}
