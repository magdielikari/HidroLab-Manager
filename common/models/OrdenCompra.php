<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ordencompra".
 *
 * @property string $id
 * @property string $nOrden
 * @property string $ubicacion
 * @property string $observaciones
 * @property string $estado
 * @property string $Peticion_id
 *
 * @property Peticion $peticion
 */
class Ordencompra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordencompra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nOrden', 'ubicacion', 'observaciones', 'estado', 'Peticion_id'], 'required'],
            [['observaciones', 'estado'], 'string'],
            [['Peticion_id'], 'integer'],
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
            'Peticion_id' => Yii::t('models', 'Peticion ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeticion()
    {
        return $this->hasOne(Peticion::className(), ['id' => 'Peticion_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\OrdencompraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\OrdencompraQuery(get_called_class());
    }
}
