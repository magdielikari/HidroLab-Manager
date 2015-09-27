<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ordenCompra".
 *
 * @property string $id
 * @property string $nOrden
 * @property string $ubicacion
 * @property string $observaciones
 * @property string $estado
 * @property string $peticion_id
 */
class OrdenCompra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordenCompra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['observaciones', 'estado'], 'string'],
            [['peticion_id'], 'required'],
            [['peticion_id'], 'integer'],
            [['nOrden'], 'string', 'max' => 45],
            [['ubicacion'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'nOrden' => Yii::t('models', 'N Orden'),
            'ubicacion' => Yii::t('models', 'Ubicacion'),
            'observaciones' => Yii::t('models', 'Observaciones'),
            'estado' => Yii::t('models', 'Estado'),
            'peticion_id' => Yii::t('models', 'Peticion ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\query\OrdenCompraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\OrdenCompraQuery(get_called_class());
    }
}
