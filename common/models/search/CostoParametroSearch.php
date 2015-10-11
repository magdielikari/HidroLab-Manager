<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostoParametro;

/**
 * CostoParametroSearch represents the model behind the search form about `common\models\CostoParametro`.
 */
class CostoParametroSearch extends CostoParametro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Parametros_id'], 'integer'],
            [['tMateriales', 'tEquipos', 'tMano'], 'number'],
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
        $query = CostoParametro::find();

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
            'tMateriales' => $this->tMateriales,
            'tEquipos' => $this->tEquipos,
            'tMano' => $this->tMano,
            'Parametros_id' => $this->Parametros_id,
        ]);

        return $dataProvider;
    }
}
