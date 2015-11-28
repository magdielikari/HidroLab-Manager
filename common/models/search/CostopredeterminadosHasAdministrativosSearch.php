<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostopredeterminadosHasAdministrativos;

/**
 * CostopredeterminadosHasAdministrativosSearch represents the model behind the search form about `common\models\CostopredeterminadosHasAdministrativos`.
 */
class CostopredeterminadosHasAdministrativosSearch extends CostopredeterminadosHasAdministrativos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'Administrativos_id'], 'integer'],
            [['cantidad', 'dias'], 'number'],
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
        $query = CostopredeterminadosHasAdministrativos::find();

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
            'CostoPredeterminados_id' => $this->CostoPredeterminados_id,
            'Administrativos_id' => $this->Administrativos_id,
            'cantidad' => $this->cantidad,
            'dias' => $this->dias,
        ]);

        return $dataProvider;
    }
}
