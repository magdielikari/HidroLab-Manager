<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CaracterizacionHasEquipos;

/**
 * CaracterizacionHasEquiposSearch represents the model behind the search form about `common\models\CaracterizacionHasEquipos`.
 */
class CaracterizacionHasEquiposSearch extends CaracterizacionHasEquipos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Caracterizacion_id', 'Equipos_id'], 'integer'],
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
        $query = CaracterizacionHasEquipos::find();

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
            'Caracterizacion_id' => $this->Caracterizacion_id,
            'Equipos_id' => $this->Equipos_id,
        ]);

        return $dataProvider;
    }
}
