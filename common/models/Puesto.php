<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "puesto".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Vendedor[] $vendedors
 */
class Puesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'puesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 45]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedors()
    {
        return $this->hasMany(Vendedor::className(), ['Puesto_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\PuestoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PuestoQuery(get_called_class());
    }
}
