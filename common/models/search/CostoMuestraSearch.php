<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostoMuestra;

/**
 * CostoMuestraSearch represents the model behind the search form about `common\models\CostoMuestra`.
 */
class CostoMuestraSearch extends CostoMuestra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Muestras_id'], 'integer'],
            [['total'], 'number'],
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
        $query = CostoMuestra::find();

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
            'Muestras_id' => $this->Muestras_id,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
