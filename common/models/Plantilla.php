<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "plantilla".
 *
 * @property integer $id
 * @property string $reporte
 * @property integer $Vendedor_id
 * @property integer $Departamento_id
 *
 * @property Vendedor $vendedor
 * @property Departamento $departamento
 * @property Reporte[] $reportes
 */
class Plantilla extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plantilla';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reporte', 'Vendedor_id', 'Departamento_id'], 'required'],
            [['reporte'], 'string'],
            [['Vendedor_id', 'Departamento_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'reporte' => Yii::t('models', 'Reporte'),
            'Vendedor_id' => Yii::t('models', 'Vendedor ID'),
            'Departamento_id' => Yii::t('models', 'Departamento ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedor()
    {
        return $this->hasOne(Vendedor::className(), ['id' => 'Vendedor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'Departamento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReportes()
    {
        return $this->hasMany(Reporte::className(), ['Plantilla_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\PlantillaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PlantillaQuery(get_called_class());
    }
}
