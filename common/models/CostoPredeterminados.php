<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costoPredeterminados".
 *
 * @property string $id
 * @property string $nombre
 * @property double $costo
 * @property string $fechaIngreso
 * @property integer $vencimiento
 * @property string $modena
 * @property string $tipo
 */
class CostoPredeterminados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costoPredeterminados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['costo'], 'number'],
            [['fechaIngreso'], 'safe'],
            [['vencimiento'], 'integer'],
            [['nombre'], 'string', 'max' => 45],
            [['modena'], 'string', 'max' => 3],
            [['tipo'], 'string', 'max' => 2]
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
            'costo' => Yii::t('models', 'Costo'),
            'fechaIngreso' => Yii::t('models', 'Fecha Ingreso'),
            'vencimiento' => Yii::t('models', 'Vencimiento'),
            'modena' => Yii::t('models', 'Modena'),
            'tipo' => Yii::t('models', 'Tipo'),
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostoPredeterminadosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostoPredeterminadosQuery(get_called_class());
    }
}
