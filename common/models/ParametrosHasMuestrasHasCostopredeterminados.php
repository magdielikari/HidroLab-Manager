<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parametros_has_muestras_has_costopredeterminados".
 *
 * @property string $Parametros_has_Muestras_Parametros_id
 * @property string $Parametros_has_Muestras_Muestras_id
 * @property string $CostoPredeterminados_id
 * @property double $cantidad
 *
 * @property Costopredeterminados $costoPredeterminados
 * @property ParametrosHasMuestras $parametrosHasMuestrasParametros
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
            [['Parametros_has_Muestras_Parametros_id', 'Parametros_has_Muestras_Muestras_id', 'CostoPredeterminados_id', 'cantidad'], 'required'],
            [['Parametros_has_Muestras_Parametros_id', 'Parametros_has_Muestras_Muestras_id', 'CostoPredeterminados_id'], 'integer'],
            [['cantidad'], 'number']
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
            'cantidad' => Yii::t('models', 'Cantidad'),
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
    public function getParametrosHasMuestrasParametros()
    {
        return $this->hasOne(ParametrosHasMuestras::className(), ['Parametros_id' => 'Parametros_has_Muestras_Parametros_id', 'Muestras_id' => 'Parametros_has_Muestras_Muestras_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\ParametrosHasMuestrasHasCostopredeterminadosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ParametrosHasMuestrasHasCostopredeterminadosQuery(get_called_class());
    }
}
