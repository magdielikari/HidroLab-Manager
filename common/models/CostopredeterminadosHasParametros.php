<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costopredeterminados_has_parametros".
 *
 * @property string $CostoPredeterminados_id
 * @property string $Parametros_id
 * @property double $cantidad
 * @property double $k
 * @property string $unidad
 *
 * @property Costopredeterminados $costoPredeterminados
 * @property Parametros $parametros
 */
class CostopredeterminadosHasParametros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costopredeterminados_has_parametros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'Parametros_id', 'cantidad', 'k', 'unidad'], 'required'],
            [['CostoPredeterminados_id', 'Parametros_id'], 'integer'],
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
            'Parametros_id' => Yii::t('models', 'Parametros ID'),
            'cantidad' => Yii::t('models', 'Cantidad'),
            'k' => Yii::t('models', 'K'),
            'unidad' => Yii::t('models', 'Unidad'),
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
    public function getParametros()
    {
        return $this->hasOne(Parametros::className(), ['id' => 'Parametros_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostopredeterminadosHasParametrosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostopredeterminadosHasParametrosQuery(get_called_class());
    }
}
