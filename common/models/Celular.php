<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "celular".
 *
 * @property string $id
 * @property string $numero
 * @property string $Clientes_id
 * @property integer $Vendedor_id
 *
 * @property Carea[] $careas
 * @property Clientes $clientes
 * @property Vendedor $vendedor
 */
class Celular extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'celular';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'Clientes_id', 'Vendedor_id'], 'integer'],
            [['Clientes_id', 'Vendedor_id'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'numero' => Yii::t('models', 'Numero'),
            'Clientes_id' => Yii::t('models', 'Clientes ID'),
            'Vendedor_id' => Yii::t('models', 'Vendedor ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCareas()
    {
        return $this->hasMany(Carea::className(), ['Celular_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'Clientes_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedor()
    {
        return $this->hasOne(Vendedor::className(), ['id' => 'Vendedor_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CelularQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CelularQuery(get_called_class());
    }
}
