<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Caracterizacion;

/**
 * CaracterizacionSearch represents the model behind the search form about `common\models\Caracterizacion`.
 */
class CaracterizacionSearch extends Caracterizacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Equipos_id'], 'integer'],
            [['nombre', 'Preservacion', 'Siglas', 'Laboratorio', 'Opacidad', 'Metodo', 'Tipo'], 'safe'],
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
        $query = Caracterizacion::find();

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
            'Equipos_id' => $this->Equipos_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'Preservacion', $this->Preservacion])
            ->andFilterWhere(['like', 'Siglas', $this->Siglas])
            ->andFilterWhere(['like', 'Laboratorio', $this->Laboratorio])
            ->andFilterWhere(['like', 'Opacidad', $this->Opacidad])
            ->andFilterWhere(['like', 'Metodo', $this->Metodo])
            ->andFilterWhere(['like', 'Tipo', $this->Tipo]);

        return $dataProvider;
    }
}
