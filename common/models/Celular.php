<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "celular".
 *
 * @property string $id
 * @property string $numero
 * @property integer $CArea_id
 * @property string $Clientes_id
 * @property integer $Vendedor_id
 *
 * @property Carea $cArea
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
            [['numero', 'CArea_id'], 'required'],
            [['numero', 'CArea_id', 'Clientes_id', 'Vendedor_id'], 'integer']
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
            'CArea_id' => Yii::t('models', 'Carea ID'),
            'Clientes_id' => Yii::t('models', 'Clientes ID'),
            'Vendedor_id' => Yii::t('models', 'Vendedor ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCArea()
    {
        return $this->hasOne(Carea::className(), ['id' => 'CArea_id']);
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
