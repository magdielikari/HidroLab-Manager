<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "limites".
 *
 * @property string $id
 * @property double $liminf
 * @property double $Limsup
 * @property string $Existente
 * @property integer $Departamento_id
 * @property integer $Decreto_id
 * @property integer $Tipo_id
 * @property integer $SubTipo_id
 * @property integer $Caracterizacion_id
 * @property string $Rama_id
 *
 * @property Departamento $departamento
 * @property Decreto $decreto
 * @property Tipo $tipo
 * @property Subtipo $subTipo
 * @property Caracterizacion $caracterizacion
 * @property Rama $rama
 * @property Parametros[] $parametros
 */
class Limites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'limites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['liminf', 'Limsup'], 'number'],
            [['Existente'], 'string'],
            [['Departamento_id', 'Decreto_id', 'Tipo_id', 'SubTipo_id', 'Caracterizacion_id', 'Rama_id'], 'required'],
            [['Departamento_id', 'Decreto_id', 'Tipo_id', 'SubTipo_id', 'Caracterizacion_id', 'Rama_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'liminf' => Yii::t('models', 'Liminf'),
            'Limsup' => Yii::t('models', 'Limsup'),
            'Existente' => Yii::t('models', 'Existente'),
            'Departamento_id' => Yii::t('models', 'Departamento ID'),
            'Decreto_id' => Yii::t('models', 'Decreto ID'),
            'Tipo_id' => Yii::t('models', 'Tipo ID'),
            'SubTipo_id' => Yii::t('models', 'Sub Tipo ID'),
            'Caracterizacion_id' => Yii::t('models', 'Caracterizacion ID'),
            'Rama_id' => Yii::t('models', 'Rama ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'Departamento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecreto()
    {
        return $this->hasOne(Decreto::className(), ['id' => 'Decreto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'Tipo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubTipo()
    {
        return $this->hasOne(Subtipo::className(), ['id' => 'SubTipo_id']);
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
    public function getRama()
    {
        return $this->hasOne(Rama::className(), ['id' => 'Rama_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametros()
    {
        return $this->hasMany(Parametros::className(), ['Limites_id' => 'id']);
    }
}
