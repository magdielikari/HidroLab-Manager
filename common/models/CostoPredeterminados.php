<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costopredeterminados".
 *
 * @property string $id
 * @property string $nombre
 * @property double $costo
 * @property string $fechaIngreso
 * @property integer $vencimiento
 * @property string $modena
 * @property string $tipo
 *
 * @property CostopredeterminadosHasCostomuestra[] $costopredeterminadosHasCostomuestras
 * @property Costomuestra[] $costoMuestras
 * @property CostopredeterminadosHasCostoparametro[] $costopredeterminadosHasCostoparametros
 * @property Costoparametro[] $costoParametros
 */
class Costopredeterminados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costopredeterminados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['costo'], 'number'],
            [['fechaIngreso'], 'safe'],
            [['vencimiento'], 'integer'],
            [['nombre'], 'string', 'max' => 45],
            [['modena'], 'string', 'max' => 3],
            [['tipo'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'nombre' => Yii::t('models', 'Nombre'),
            'costo' => Yii::t('models', 'Costo'),
            'fechaIngreso' => Yii::t('models', 'Fecha Ingreso'),
            'vencimiento' => Yii::t('models', 'Vencimiento'),
            'modena' => Yii::t('models', 'Modena'),
            'tipo' => Yii::t('models', 'Tipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasCostomuestras()
    {
        return $this->hasMany(CostopredeterminadosHasCostomuestra::className(), ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoMuestras()
    {
        return $this->hasMany(Costomuestra::className(), ['id' => 'CostoMuestra_id'])->viaTable('costopredeterminados_has_costomuestra', ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasCostoparametros()
    {
        return $this->hasMany(CostopredeterminadosHasCostoparametro::className(), ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoParametros()
    {
        return $this->hasMany(Costoparametro::className(), ['id' => 'CostoParametro_id'])->viaTable('costopredeterminados_has_costoparametro', ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostopredeterminadosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostopredeterminadosQuery(get_called_class());
    }
}
