<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "caracterizacion".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $preservacion
 * @property string $siglas
 * @property string $laboratorio
 * @property string $opacidad
 * @property string $metodo
 * @property string $tipo
 * @property integer $Equipos_id
 *
 * @property Equipos $equipos
 * @property CaracterizacionHasDepartamento[] $caracterizacionHasDepartamentos
 * @property Departamento[] $departamentos
 * @property CaracterizacionHasEquipos[] $caracterizacionHasEquipos
 * @property Equipos[] $equipos0
 * @property Limites[] $limites
 * @property RamaHasCaracterizacion[] $ramaHasCaracterizacions
 * @property Rama[] $ramas
 */
class Caracterizacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caracterizacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['preservacion', 'laboratorio', 'opacidad', 'tipo'], 'string'],
            [['Equipos_id'], 'required'],
            [['Equipos_id'], 'integer'],
            [['nombre'], 'string', 'max' => 45],
            [['siglas', 'metodo'], 'string', 'max' => 15]
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
            'preservacion' => Yii::t('models', 'Preservacion'),
            'siglas' => Yii::t('models', 'Siglas'),
            'laboratorio' => Yii::t('models', 'Laboratorio'),
            'opacidad' => Yii::t('models', 'Opacidad'),
            'metodo' => Yii::t('models', 'Metodo'),
            'tipo' => Yii::t('models', 'Tipo'),
            'Equipos_id' => Yii::t('models', 'Equipos ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos()
    {
        return $this->hasOne(Equipos::className(), ['id' => 'Equipos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacionHasDepartamentos()
    {
        return $this->hasMany(CaracterizacionHasDepartamento::className(), ['Caracterizacion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['id' => 'Departamento_id'])->viaTable('caracterizacion_has_departamento', ['Caracterizacion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacionHasEquipos()
    {
        return $this->hasMany(CaracterizacionHasEquipos::className(), ['Caracterizacion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos0()
    {
        return $this->hasMany(Equipos::className(), ['id' => 'Equipos_id'])->viaTable('caracterizacion_has_equipos', ['Caracterizacion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLimites()
    {
        return $this->hasMany(Limites::className(), ['Caracterizacion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRamaHasCaracterizacions()
    {
        return $this->hasMany(RamaHasCaracterizacion::className(), ['Caracterizacion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRamas()
    {
        return $this->hasMany(Rama::className(), ['id' => 'Rama_id'])->viaTable('rama_has_caracterizacion', ['Caracterizacion_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CaracterizacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CaracterizacionQuery(get_called_class());
    }
}
