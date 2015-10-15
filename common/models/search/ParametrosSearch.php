<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Plantilla;

/**
 * ParametrosSearch represents the model behind the search form about `common\models\Plantilla`.
 */
class ParametrosSearch extends Plantilla
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Vendedor_id', 'Departamento_id'], 'integer'],
            [['reporte'], 'safe'],
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
        $query = Plantilla::find();

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
            'Vendedor_id' => $this->Vendedor_id,
            'Departamento_id' => $this->Departamento_id,
        ]);

        $query->andFilterWhere(['like', 'reporte', $this->reporte]);

        return $dataProvider;
    }
}
