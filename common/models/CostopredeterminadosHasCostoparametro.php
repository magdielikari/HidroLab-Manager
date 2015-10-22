<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costopredeterminados_has_costoparametro".
 *
 * @property string $CostoPredeterminados_id
 * @property string $CostoParametro_id
 * @property double $cantidad
 * @property double $k
 * @property string $unidad
 *
 * @property Costoparametro $costoParametro
 * @property Costopredeterminados $costoPredeterminados
 */
class CostopredeterminadosHasCostoparametro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costopredeterminados_has_costoparametro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'CostoParametro_id'], 'required'],
            [['CostoPredeterminados_id', 'CostoParametro_id'], 'integer'],
            [['cantidad', 'k'], 'number'],
            [['unidad'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CostoPredeterminados_id' => Yii::t('models', 'Costo Predeterminados ID'),
            'CostoParametro_id' => Yii::t('models', 'Costo Parametro ID'),
            'cantidad' => Yii::t('models', 'Cantidad'),
            'k' => Yii::t('models', 'K'),
            'unidad' => Yii::t('models', 'Unidad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoParametro()
    {
        return $this->hasOne(Costoparametro::className(), ['id' => 'CostoParametro_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoPredeterminados()
    {
        return $this->hasOne(Costopredeterminados::className(), ['id' => 'CostoPredeterminados_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostopredeterminadosHasCostoparametroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostopredeterminadosHasCostoparametroQuery(get_called_class());
    }
}
