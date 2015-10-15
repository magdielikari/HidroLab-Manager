<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costomuestra".
 *
 * @property string $id
 * @property string $Muestras_id
 * @property double $total
 *
 * @property Muestras $muestras
 * @property CostopredeterminadosHasCostomuestra[] $costopredeterminadosHasCostomuestras
 * @property Costopredeterminados[] $costoPredeterminados
 * @property Costos[] $costos
 */
class Costomuestra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costomuestra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Muestras_id'], 'required'],
            [['Muestras_id'], 'integer'],
            [['total'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'Muestras_id' => Yii::t('models', 'Muestras ID'),
            'total' => Yii::t('models', 'Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuestras()
    {
        return $this->hasOne(Muestras::className(), ['id' => 'Muestras_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasCostomuestras()
    {
        return $this->hasMany(CostopredeterminadosHasCostomuestra::className(), ['CostoMuestra_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoPredeterminados()
    {
        return $this->hasMany(Costopredeterminados::className(), ['id' => 'CostoPredeterminados_id'])->viaTable('costopredeterminados_has_costomuestra', ['CostoMuestra_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostos()
    {
        return $this->hasMany(Costos::className(), ['CostoMuestra_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostomuestraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostomuestraQuery(get_called_class());
    }
}
