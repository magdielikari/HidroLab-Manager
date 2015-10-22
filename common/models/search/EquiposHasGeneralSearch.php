<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\EquiposHasGeneral;

/**
 * EquiposHasGeneralSearch represents the model behind the search form about `common\models\EquiposHasGeneral`.
 */
class EquiposHasGeneralSearch extends EquiposHasGeneral
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Equipos_id', 'General_id'], 'integer'],
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
        $query = EquiposHasGeneral::find();

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
            'Equipos_id' => $this->Equipos_id,
            'General_id' => $this->General_id,
        ]);

        return $dataProvider;
    }
}
