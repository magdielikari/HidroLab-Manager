<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costos".
 *
 * @property string $id
 * @property double $cAnalisis
 * @property double $cMuestreo
 * @property double $cInforme
 * @property double $cAdministrativo
 * @property double $utilidad
 * @property integer $rendimiento
 * @property string $General_id
 *
 * @property General $general
 * @property Peticion[] $peticions
 */
class Costos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cAnalisis', 'cMuestreo', 'cInforme', 'cAdministrativo', 'utilidad', 'rendimiento', 'General_id'], 'required'],
            [['cAnalisis', 'cMuestreo', 'cInforme', 'cAdministrativo', 'utilidad'], 'number'],
            [['rendimiento', 'General_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'cAnalisis' => Yii::t('models', 'C Analisis'),
            'cMuestreo' => Yii::t('models', 'C Muestreo'),
            'cInforme' => Yii::t('models', 'C Informe'),
            'cAdministrativo' => Yii::t('models', 'C Administrativo'),
            'utilidad' => Yii::t('models', 'Utilidad'),
            'rendimiento' => Yii::t('models', 'Rendimiento'),
            'General_id' => Yii::t('models', 'General ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneral()
    {
        return $this->hasOne(General::className(), ['id' => 'General_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeticions()
    {
        return $this->hasMany(Peticion::className(), ['Costos_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostosQuery(get_called_class());
    }
}
