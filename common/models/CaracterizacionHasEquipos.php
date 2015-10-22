<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "caracterizacion_has_equipos".
 *
 * @property integer $Caracterizacion_id
 * @property integer $Equipos_id
 *
 * @property Caracterizacion $caracterizacion
 * @property Equipos $equipos
 */
class CaracterizacionHasEquipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caracterizacion_has_equipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Caracterizacion_id', 'Equipos_id'], 'required'],
            [['Caracterizacion_id', 'Equipos_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Caracterizacion_id' => Yii::t('models', 'Caracterizacion ID'),
            'Equipos_id' => Yii::t('models', 'Equipos ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacion()
    {
        return $this->hasOne(Caracterizacion::className(), ['id' => 'Caracterizacion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipos()
    {
        return $this->hasOne(Equipos::className(), ['id' => 'Equipos_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CaracterizacionHasEquiposQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CaracterizacionHasEquiposQuery(get_called_class());
    }
}
