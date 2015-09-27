<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property string $id
 * @property string $Nombre
 * @property string $Direccion
 * @property string $Celular
 * @property string $Email
 * @property string $Encargado
 * @property string $NRif
 * @property string $CRif
 * @property string $Siglas
 * @property integer $Contador
 * @property integer $Codigo_id
 *
 * @property Carea $codigo
 * @property General[] $generals
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Direccion'], 'string'],
            [['Celular', 'Contador', 'Codigo_id'], 'integer'],
            [['Codigo_id'], 'required'],
            [['Nombre', 'Email'], 'string', 'max' => 90],
            [['Encargado'], 'string', 'max' => 45],
            [['NRif'], 'string', 'max' => 10],
            [['CRif'], 'string', 'max' => 1],
            [['Siglas'], 'string', 'max' => 4]
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
            'Direccion' => Yii::t('models', 'Direccion'),
            'Celular' => Yii::t('models', 'Celular'),
            'Email' => Yii::t('models', 'Email'),
            'Encargado' => Yii::t('models', 'Encargado'),
            'NRif' => Yii::t('models', 'Nrif'),
            'CRif' => Yii::t('models', 'Crif'),
            'Siglas' => Yii::t('models', 'Siglas'),
            'Contador' => Yii::t('models', 'Contador'),
            'Codigo_id' => Yii::t('models', 'Codigo ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodigo()
    {
        return $this->hasOne(Carea::className(), ['id' => 'Codigo_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['Clientes_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\ClienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ClienteQuery(get_called_class());
    }
}
