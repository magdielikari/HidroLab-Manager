<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costopredeterminados_has_costomuestra".
 *
 * @property string $CostoPredeterminados_id
 * @property string $CostoMuestra_id
 * @property double $cantidad
 *
 * @property Costomuestra $costoMuestra
 * @property Costopredeterminados $costoPredeterminados
 */
class CostopredeterminadosHasCostomuestra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costopredeterminados_has_costomuestra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'CostoMuestra_id'], 'required'],
            [['CostoPredeterminados_id', 'CostoMuestra_id'], 'integer'],
            [['cantidad'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CostoPredeterminados_id' => Yii::t('models', 'Costo Predeterminados ID'),
            'CostoMuestra_id' => Yii::t('models', 'Costo Muestra ID'),
            'cantidad' => Yii::t('models', 'Cantidad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoMuestra()
    {
        return $this->hasOne(Costomuestra::className(), ['id' => 'CostoMuestra_id']);
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
     * @return \common\models\query\CostopredeterminadosHasCostomuestraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostopredeterminadosHasCostomuestraQuery(get_called_class());
    }
}
