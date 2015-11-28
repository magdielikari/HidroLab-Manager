<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prestaciones".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property CostopredeterminadosHasPrestaciones[] $costopredeterminadosHasPrestaciones
 * @property Costopredeterminados[] $costoPredeterminados
 */
class Prestaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prestaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasPrestaciones()
    {
        return $this->hasMany(CostopredeterminadosHasPrestaciones::className(), ['Prestaciones_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoPredeterminados()
    {
        return $this->hasMany(Costopredeterminados::className(), ['id' => 'CostoPredeterminados_id'])->viaTable('costopredeterminados_has_prestaciones', ['Prestaciones_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\PrestacionesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PrestacionesQuery(get_called_class());
    }
}
