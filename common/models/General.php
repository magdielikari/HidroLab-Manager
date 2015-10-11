<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "general".
 *
 * @property string $id
 * @property integer $Copias
 * @property string $Caudal
 * @property string $Analisis
 * @property integer $Departamento_id
 * @property integer $Decreto_id
 * @property string $Clientes_id
 * @property integer $Vendedor_id
 *
 * @property Costos[] $costos
 * @property EquiposHasGeneral[] $equiposHasGenerals
 * @property Equipos[] $equipos
 * @property Departamento $departamento
 * @property Decreto $decreto
 * @property Clientes $clientes
 * @property Vendedor $vendedor
 * @property GeneralHasTipo[] $generalHasTipos
 * @property Tipo[] $tipos
 * @property Muestras[] $muestras
 * @property Parametros[] $parametros
 * @property Peticion[] $peticions
 * @property RamaHasGeneral[] $ramaHasGenerals
 * @property Rama[] $ramas
 * @property Reporte[] $reportes
 */
class General extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Copias', 'Departamento_id', 'Decreto_id', 'Clientes_id', 'Vendedor_id'], 'integer'],
            [['Caudal', 'Analisis'], 'string'],
            [['Departamento_id', 'Decreto_id', 'Clientes_id', 'Vendedor_id'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'Copias' => Yii::t('models', 'Copias'),
            'Caudal' => Yii::t('models', 'Caudal'),
            'Analisis' => Yii::t('models', 'Analisis'),
            'Departamento_id' => Yii::t('models', 'Departamento ID'),
            'Decreto_id' => Yii::t('models', 'Decreto ID'),
            'Clientes_id' => Yii::t('models', 'Clientes ID'),
            'Vendedor_id' => Yii::t('models', 'Vendedor ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostos()
    {
        return $this->hasMany(Costos::className(), ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquiposHasGenerals()
    {
        return $this->hasMany(EquiposHasGeneral::className(), ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos()
    {
        return $this->hasMany(Equipos::className(), ['id' => 'Equipos_id'])->viaTable('equipos_has_general', ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'Departamento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecreto()
    {
        return $this->hasOne(Decreto::className(), ['id' => 'Decreto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'Clientes_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedor()
    {
        return $this->hasOne(Vendedor::className(), ['id' => 'Vendedor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneralHasTipos()
    {
        return $this->hasMany(GeneralHasTipo::className(), ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasMany(Tipo::className(), ['id' => 'Tipo_id'])->viaTable('general_has_tipo', ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuestras()
    {
        return $this->hasMany(Muestras::className(), ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametros()
    {
        return $this->hasMany(Parametros::className(), ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeticions()
    {
        return $this->hasMany(Peticion::className(), ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRamaHasGenerals()
    {
        return $this->hasMany(RamaHasGeneral::className(), ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRamas()
    {
        return $this->hasMany(Rama::className(), ['id' => 'Rama_id'])->viaTable('rama_has_general', ['General_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReportes()
    {
        return $this->hasMany(Reporte::className(), ['General_id' => 'id']);
    }
}
