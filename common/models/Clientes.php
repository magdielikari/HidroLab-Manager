<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property string $id
 * @property string $Nombre
 * @property string $Direccion
 * @property string $Email
 * @property string $Encargado
 * @property string $NRif
 * @property string $CRif
 * @property string $Siglas
 * @property integer $Contador
 *
 * @property Celular[] $celulars
 * @property General[] $generals
 */
class Clientes extends \yii\db\ActiveRecord
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
            [['Contador'], 'integer'],
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
            'Email' => Yii::t('models', 'Email'),
            'Encargado' => Yii::t('models', 'Encargado'),
            'NRif' => Yii::t('models', 'Nrif'),
            'CRif' => Yii::t('models', 'Crif'),
            'Siglas' => Yii::t('models', 'Siglas'),
            'Contador' => Yii::t('models', 'Contador'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCelulars()
    {
        return $this->hasMany(Celular::className(), ['Clientes_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['Clientes_id' => 'id']);
    }
}
