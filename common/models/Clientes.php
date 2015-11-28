<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property string $id
 * @property string $nombre
 * @property string $direccion
 * @property string $email
 * @property string $encargado
 * @property string $nRif
 * @property string $cRif
 * @property string $siglas
 * @property integer $contador
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
            [['nombre', 'direccion', 'email', 'encargado', 'nRif', 'cRif', 'siglas', 'contador'], 'required'],
            [['direccion'], 'string'],
            [['contador'], 'integer'],
            [['nombre', 'email'], 'string', 'max' => 90],
            [['encargado'], 'string', 'max' => 45],
            [['nRif'], 'string', 'max' => 10],
            [['cRif'], 'string', 'max' => 1],
            [['siglas'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'nombre' => Yii::t('models', 'Nombre'),
            'direccion' => Yii::t('models', 'Direccion'),
            'email' => Yii::t('models', 'Email'),
            'encargado' => Yii::t('models', 'Encargado'),
            'nRif' => Yii::t('models', 'N Rif'),
            'cRif' => Yii::t('models', 'C Rif'),
            'siglas' => Yii::t('models', 'Siglas'),
            'contador' => Yii::t('models', 'Contador'),
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

    /**
     * @inheritdoc
     * @return \common\models\query\ClientesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ClientesQuery(get_called_class());
    }
}
