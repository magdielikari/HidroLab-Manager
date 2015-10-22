<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "equipos_has_general".
 *
 * @property integer $Equipos_id
 * @property string $General_id
 *
 * @property Equipos $equipos
 * @property General $general
 */
class EquiposHasGeneral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipos_has_general';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Equipos_id', 'General_id'], 'required'],
            [['Equipos_id', 'General_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Equipos_id' => Yii::t('models', 'Equipos ID'),
            'General_id' => Yii::t('models', 'General ID'),
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
    public function getGeneral()
    {
        return $this->hasOne(General::className(), ['id' => 'General_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\EquiposHasGeneralQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EquiposHasGeneralQuery(get_called_class());
    }
}
