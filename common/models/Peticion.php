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
 * @property string $Referencia_id
 * @property string $General_id
 * @property string $Muestras_id
 * @property string $Costos_id
 * @property string $Reporte_id
 *
 * @property Ordencompra[] $ordencompras
 * @property Referencia $referencia
 * @property General $general
 * @property Muestras $muestras
 * @property Costos $costos
 * @property Reporte $reporte
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
            [['fPeticion', 'cadena', 'fVencimiento', 'Referencia_id', 'General_id', 'Muestras_id', 'Costos_id', 'Reporte_id'], 'required'],
            [['fPeticion', 'fCreacion'], 'safe'],
            [['fVencimiento', 'Referencia_id', 'General_id', 'Muestras_id', 'Costos_id', 'Reporte_id'], 'integer'],
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
            'Referencia_id' => Yii::t('models', 'Referencia ID'),
            'General_id' => Yii::t('models', 'General ID'),
            'Muestras_id' => Yii::t('models', 'Muestras ID'),
            'Costos_id' => Yii::t('models', 'Costos ID'),
            'Reporte_id' => Yii::t('models', 'Reporte ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdencompras()
    {
        return $this->hasMany(Ordencompra::className(), ['Peticion_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReferencia()
    {
        return $this->hasOne(Referencia::className(), ['id' => 'Referencia_id']);
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostos()
    {
        return $this->hasOne(Costos::className(), ['id' => 'Costos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReporte()
    {
        return $this->hasOne(Reporte::className(), ['id' => 'Reporte_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\PeticionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PeticionQuery(get_called_class());
    }
}
