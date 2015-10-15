<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costoparametro".
 *
 * @property string $id
 * @property double $tMateriales
 * @property double $tEquipos
 * @property double $tMano
 * @property string $Parametros_id
 *
 * @property Parametros $parametros
 * @property CostopredeterminadosHasCostoparametro[] $costopredeterminadosHasCostoparametros
 * @property Costopredeterminados[] $costoPredeterminados
 * @property Costos[] $costos
 */
class Costoparametro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costoparametro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tMateriales', 'tEquipos', 'tMano'], 'number'],
            [['Parametros_id'], 'required'],
            [['Parametros_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'tMateriales' => Yii::t('models', 'T Materiales'),
            'tEquipos' => Yii::t('models', 'T Equipos'),
            'tMano' => Yii::t('models', 'T Mano'),
            'Parametros_id' => Yii::t('models', 'Parametros ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametros()
    {
        return $this->hasOne(Parametros::className(), ['id' => 'Parametros_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasCostoparametros()
    {
        return $this->hasMany(CostopredeterminadosHasCostoparametro::className(), ['CostoParametro_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoPredeterminados()
    {
        return $this->hasMany(Costopredeterminados::className(), ['id' => 'CostoPredeterminados_id'])->viaTable('costopredeterminados_has_costoparametro', ['CostoParametro_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostos()
    {
        return $this->hasMany(Costos::className(), ['CostoParametro_id' => 'id', 'CostoParametro_Parametros_id' => 'Parametros_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostoparametroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostoparametroQuery(get_called_class());
    }
}
