<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "equipos".
 *
 * @property integer $id
 * @property string $Nombre
 * @property string $Serial
 * @property string $Modelo
 * @property string $Estado
 * @property string $Propietario
 * @property string $Equiposcol
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
            [['Nombre', 'Serial', 'Modelo', 'Estado', 'Propietario', 'Equiposcol'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'Nombre' => Yii::t('models', 'Nombre'),
            'Serial' => Yii::t('models', 'Serial'),
            'Modelo' => Yii::t('models', 'Modelo'),
            'Estado' => Yii::t('models', 'Estado'),
            'Propietario' => Yii::t('models', 'Propietario'),
            'Equiposcol' => Yii::t('models', 'Equiposcol'),
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
}
