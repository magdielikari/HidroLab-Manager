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
 * @property integer $CostoParametro_id
 * @property string $CostoParametro_Parametros_id
 * @property string $costoMuestra_id
 *
 * @property General $general
 * @property Costoparametro $costoParametro
 * @property Costomuestra $costoMuestra
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
            [['cAnalisis', 'cMuestreo', 'cInforme', 'cAdministrativo', 'utilidad'], 'number'],
            [['rendimiento', 'General_id', 'CostoParametro_id', 'CostoParametro_Parametros_id', 'costoMuestra_id'], 'integer'],
            [['General_id', 'CostoParametro_id', 'CostoParametro_Parametros_id', 'costoMuestra_id'], 'required']
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
            'CostoParametro_id' => Yii::t('models', 'Costo Parametro ID'),
            'CostoParametro_Parametros_id' => Yii::t('models', 'Costo Parametro  Parametros ID'),
            'costoMuestra_id' => Yii::t('models', 'Costo Muestra ID'),
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
    public function getCostoParametro()
    {
        return $this->hasOne(Costoparametro::className(), ['id' => 'CostoParametro_id', 'Parametros_id' => 'CostoParametro_Parametros_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoMuestra()
    {
        return $this->hasOne(Costomuestra::className(), ['id' => 'costoMuestra_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeticions()
    {
        return $this->hasMany(Peticion::className(), ['costos_id' => 'id', 'costos_General_id' => 'General_id', 'costos_CostoParametro_id' => 'CostoParametro_id', 'costos_CostoParametro_Parametros_id' => 'CostoParametro_Parametros_id', 'costos_costoMuestra_id' => 'costoMuestra_id']);
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
