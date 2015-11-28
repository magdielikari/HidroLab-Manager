<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "constantes".
 *
 * @property string $id
 * @property string $nombre
 * @property integer $cantidad
 *
 * @property CostopredeterminadosHasPrestaciones[] $costopredeterminadosHasPrestaciones
 */
class Constantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'constantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'cantidad'], 'required'],
            [['cantidad'], 'integer'],
            [['nombre'], 'string', 'max' => 90]
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
            'cantidad' => Yii::t('models', 'Cantidad'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasPrestaciones()
    {
        return $this->hasMany(CostopredeterminadosHasPrestaciones::className(), ['Constantes_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\ConstantesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ConstantesQuery(get_called_class());
    }
}
