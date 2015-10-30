<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Carea;

/**
 * CareaSearch represents the model behind the search form about `common\models\Carea`.
 */
class CareaSearch extends Carea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'Celular_id'], 'integer'],
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
        $query = Carea::find();

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
            'nombre' => $this->nombre,
            'Celular_id' => $this->Celular_id,
        ]);

        return $dataProvider;
    }
}
