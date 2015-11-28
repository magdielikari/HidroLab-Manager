<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parametros_has_muestras_has_costopredeterminados".
 *
 * @property string $Parametros_has_Muestras_Parametros_id
 * @property string $Parametros_has_Muestras_Muestras_id
 * @property string $CostoPredeterminados_id
 *
 * @property ParametrosHasMuestras $parametrosHasMuestrasParametros
 * @property Costopredeterminados $costoPredeterminados
 */
class ParametrosHasMuestrasHasCostopredeterminados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parametros_has_muestras_has_costopredeterminados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Parametros_has_Muestras_Parametros_id', 'Parametros_has_Muestras_Muestras_id', 'CostoPredeterminados_id'], 'required'],
            [['Parametros_has_Muestras_Parametros_id', 'Parametros_has_Muestras_Muestras_id', 'CostoPredeterminados_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Parametros_has_Muestras_Parametros_id' => Yii::t('models', 'Parametros Has  Muestras  Parametros ID'),
            'Parametros_has_Muestras_Muestras_id' => Yii::t('models', 'Parametros Has  Muestras  Muestras ID'),
            'CostoPredeterminados_id' => Yii::t('models', 'Costo Predeterminados ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametrosHasMuestrasParametros()
    {
        return $this->hasOne(ParametrosHasMuestras::className(), ['Parametros_id' => 'Parametros_has_Muestras_Parametros_id', 'Muestras_id' => 'Parametros_has_Muestras_Muestras_id']);
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
     * @return \common\models\query\CostopredeterminadosHasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostopredeterminadosHasQuery(get_called_class());
    }
}
