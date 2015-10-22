<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "caracterizacion_has_departamento".
 *
 * @property integer $Caracterizacion_id
 * @property integer $Departamento_id
 *
 * @property Caracterizacion $caracterizacion
 * @property Departamento $departamento
 */
class CaracterizacionHasDepartamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'caracterizacion_has_departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Caracterizacion_id', 'Departamento_id'], 'required'],
            [['Caracterizacion_id', 'Departamento_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Caracterizacion_id' => Yii::t('models', 'Caracterizacion ID'),
            'Departamento_id' => Yii::t('models', 'Departamento ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacion()
    {
        return $this->hasOne(Caracterizacion::className(), ['id' => 'Caracterizacion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'Departamento_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CaracterizacionHasDepartamentoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CaracterizacionHasDepartamentoQuery(get_called_class());
    }
}
