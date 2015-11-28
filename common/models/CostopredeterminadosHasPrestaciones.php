<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costopredeterminados_has_prestaciones".
 *
 * @property string $CostoPredeterminados_id
 * @property string $Prestaciones_id
 * @property string $Constantes_id
 *
 * @property Costopredeterminados $costoPredeterminados
 * @property Prestaciones $prestaciones
 * @property Constantes $constantes
 */
class CostopredeterminadosHasPrestaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costopredeterminados_has_prestaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'Prestaciones_id', 'Constantes_id'], 'required'],
            [['CostoPredeterminados_id', 'Prestaciones_id', 'Constantes_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CostoPredeterminados_id' => Yii::t('models', 'Costo Predeterminados ID'),
            'Prestaciones_id' => Yii::t('models', 'Prestaciones ID'),
            'Constantes_id' => Yii::t('models', 'Constantes ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoPredeterminados()
    {
        return $this->hasOne(Costopredeterminados::className(), ['id' => 'CostoPredeterminados_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestaciones()
    {
        return $this->hasOne(Prestaciones::className(), ['id' => 'Prestaciones_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConstantes()
    {
        return $this->hasOne(Constantes::className(), ['id' => 'Constantes_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostopredeterminadosHasPrestacionesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostopredeterminadosHasPrestacionesQuery(get_called_class());
    }
}
