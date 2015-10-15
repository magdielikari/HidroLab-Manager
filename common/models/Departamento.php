<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $contador
 *
 * @property CaracterizacionHasDepartamento[] $caracterizacionHasDepartamentos
 * @property Caracterizacion[] $caracterizacions
 * @property DepartamentoHasDecreto[] $departamentoHasDecretos
 * @property Decreto[] $decretos
 * @property General[] $generals
 * @property Limites[] $limites
 * @property Plantilla[] $plantillas
 * @property Vendedor[] $vendedors
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contador'], 'integer'],
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
            'contador' => Yii::t('models', 'Contador'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacionHasDepartamentos()
    {
        return $this->hasMany(CaracterizacionHasDepartamento::className(), ['Departamento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacions()
    {
        return $this->hasMany(Caracterizacion::className(), ['id' => 'Caracterizacion_id'])->viaTable('caracterizacion_has_departamento', ['Departamento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentoHasDecretos()
    {
        return $this->hasMany(DepartamentoHasDecreto::className(), ['Departamento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecretos()
    {
        return $this->hasMany(Decreto::className(), ['id' => 'Decreto_id'])->viaTable('departamento_has_decreto', ['Departamento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['Departamento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLimites()
    {
        return $this->hasMany(Limites::className(), ['Departamento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlantillas()
    {
        return $this->hasMany(Plantilla::className(), ['Departamento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedors()
    {
        return $this->hasMany(Vendedor::className(), ['Departamento_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\DepartamentoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DepartamentoQuery(get_called_class());
    }
}
