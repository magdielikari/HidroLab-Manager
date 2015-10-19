<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "peticion".
 *
 * @property string $id
 * @property string $fPeticion
 * @property string $cadena
 * @property integer $fVencimiento
 * @property string $fCreacion
 * @property string $referencia_id
 * @property string $costos_id
 * @property string $costos_General_id
 * @property integer $costos_CostoParametro_id
 * @property string $costos_CostoParametro_Parametros_id
 * @property string $costos_costoMuestra_id
 * @property string $General_id
 * @property string $Muestras_id
 *
 * @property Ordencompra[] $ordencompras
 * @property Referencia $referencia
 * @property Costos $costos
 * @property General $general
 * @property Muestras $muestras
 */
class Peticion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peticion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fPeticion', 'fCreacion'], 'safe'],
            [['fVencimiento', 'referencia_id', 'costos_id', 'costos_General_id', 'costos_CostoParametro_id', 'costos_CostoParametro_Parametros_id', 'costos_costoMuestra_id', 'General_id', 'Muestras_id'], 'integer'],
            [['referencia_id', 'costos_id', 'costos_General_id', 'costos_CostoParametro_id', 'costos_CostoParametro_Parametros_id', 'costos_costoMuestra_id', 'General_id', 'Muestras_id'], 'required'],
            [['cadena'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'fPeticion' => Yii::t('models', 'F Peticion'),
            'cadena' => Yii::t('models', 'Cadena'),
            'fVencimiento' => Yii::t('models', 'F Vencimiento'),
            'fCreacion' => Yii::t('models', 'F Creacion'),
            'referencia_id' => Yii::t('models', 'Referencia ID'),
            'costos_id' => Yii::t('models', 'Costos ID'),
            'costos_General_id' => Yii::t('models', 'Costos  General ID'),
            'costos_CostoParametro_id' => Yii::t('models', 'Costos  Costo Parametro ID'),
            'costos_CostoParametro_Parametros_id' => Yii::t('models', 'Costos  Costo Parametro  Parametros ID'),
            'costos_costoMuestra_id' => Yii::t('models', 'Costos Costo Muestra ID'),
            'General_id' => Yii::t('models', 'General ID'),
            'Muestras_id' => Yii::t('models', 'Muestras ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdencompras()
    {
        return $this->hasMany(Ordencompra::className(), ['peticion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReferencia()
    {
        return $this->hasOne(Referencia::className(), ['id' => 'referencia_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostos()
    {
        return $this->hasOne(Costos::className(), ['id' => 'costos_id', 'General_id' => 'costos_General_id', 'CostoParametro_id' => 'costos_CostoParametro_id', 'CostoParametro_Parametros_id' => 'costos_CostoParametro_Parametros_id', 'costoMuestra_id' => 'costos_costoMuestra_id']);
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
    public function getMuestras()
    {
        return $this->hasOne(Muestras::className(), ['id' => 'Muestras_id']);
    }
}
