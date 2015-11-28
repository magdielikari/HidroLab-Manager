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
 * @property string $Moneda_id
 *
 * @property Moneda $moneda
 * @property CostopredeterminadosHasAdministrativos[] $costopredeterminadosHasAdministrativos
 * @property Administrativos[] $administrativos
 * @property CostopredeterminadosHasParametros[] $costopredeterminadosHasParametros
 * @property Parametros[] $parametros
 * @property CostopredeterminadosHasPrestaciones[] $costopredeterminadosHasPrestaciones
 * @property Prestaciones[] $prestaciones
 * @property ParametrosHasMuestrasHasCostopredeterminados[] $parametrosHasMuestrasHasCostopredeterminados
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
            [['nombre', 'costo', 'fechaIngreso', 'vencimiento', 'Moneda_id'], 'required'],
            [['costo'], 'number'],
            [['fechaIngreso'], 'safe'],
            [['vencimiento', 'Moneda_id'], 'integer'],
            [['nombre'], 'string', 'max' => 45]
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
            'Moneda_id' => Yii::t('models', 'Moneda ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMoneda()
    {
        return $this->hasOne(Moneda::className(), ['id' => 'Moneda_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasAdministrativos()
    {
        return $this->hasMany(CostopredeterminadosHasAdministrativos::className(), ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrativos()
    {
        return $this->hasMany(Administrativos::className(), ['id' => 'Administrativos_id'])->viaTable('costopredeterminados_has_administrativos', ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasParametros()
    {
        return $this->hasMany(CostopredeterminadosHasParametros::className(), ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametros()
    {
        return $this->hasMany(Parametros::className(), ['id' => 'Parametros_id'])->viaTable('costopredeterminados_has_parametros', ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasPrestaciones()
    {
        return $this->hasMany(CostopredeterminadosHasPrestaciones::className(), ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestaciones()
    {
        return $this->hasMany(Prestaciones::className(), ['id' => 'Prestaciones_id'])->viaTable('costopredeterminados_has_prestaciones', ['CostoPredeterminados_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametrosHasMuestrasHasCostopredeterminados()
    {
        return $this->hasMany(ParametrosHasMuestrasHasCostopredeterminados::className(), ['CostoPredeterminados_id' => 'id']);
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
