<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "equipos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $serial
 * @property string $modelo
 * @property string $estado
 * @property string $propietario
 * @property string $equiposcol
 *
 * @property Caracterizacion[] $caracterizacions
 * @property CaracterizacionHasEquipos[] $caracterizacionHasEquipos
 * @property Caracterizacion[] $caracterizacions0
 * @property EquiposHasGeneral[] $equiposHasGenerals
 * @property General[] $generals
 */
class Equipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'serial', 'modelo', 'estado', 'propietario', 'equiposcol'], 'string', 'max' => 45]
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
            'serial' => Yii::t('models', 'Serial'),
            'modelo' => Yii::t('models', 'Modelo'),
            'estado' => Yii::t('models', 'Estado'),
            'propietario' => Yii::t('models', 'Propietario'),
            'equiposcol' => Yii::t('models', 'Equiposcol'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacions()
    {
        return $this->hasMany(Caracterizacion::className(), ['Equipos_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacionHasEquipos()
    {
        return $this->hasMany(CaracterizacionHasEquipos::className(), ['Equipos_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacions0()
    {
        return $this->hasMany(Caracterizacion::className(), ['id' => 'Caracterizacion_id'])->viaTable('caracterizacion_has_equipos', ['Equipos_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquiposHasGenerals()
    {
        return $this->hasMany(EquiposHasGeneral::className(), ['Equipos_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['id' => 'General_id'])->viaTable('equipos_has_general', ['Equipos_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\EquiposQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EquiposQuery(get_called_class());
    }
}
