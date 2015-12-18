<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Limites;

/**
 * LimitesSearch represents the model behind the search form about `common\models\Limites`.
 */
class LimitesSearch extends Limites
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Departamento_id', 'Decreto_id', 'Caracterizacion_id'], 'integer'],
            [['Tipo_id', 'SubTipo_id', 'Rama_id'], 'each', 'rule'=>['integer']],
            [['liminf', 'limsup'], 'number'],
            [['rama','caracterizacion','subTipo','tipo','decreto','departamento','existente'], 'safe'],
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
        $query = Limites::find();

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
            'liminf' => $this->liminf,
            'limsup' => $this->limsup,
            'Departamento_id' => $this->Departamento_id,
            'Decreto_id' => $this->Decreto_id,
            'Tipo_id' => $this->Tipo_id,
            'SubTipo_id' => $this->SubTipo_id,
            'Caracterizacion_id' => $this->Caracterizacion_id,
            'Rama_id' => $this->Rama_id,
        ]);

        $query->andFilterWhere(['like', 'existente', $this->existente]);

        return $dataProvider;
    }
}
