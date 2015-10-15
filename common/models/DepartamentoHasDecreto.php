<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "departamento_has_decreto".
 *
 * @property integer $Departamento_id
 * @property integer $Decreto_id
 *
 * @property Departamento $departamento
 * @property Decreto $decreto
 */
class DepartamentoHasDecreto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento_has_decreto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Departamento_id', 'Decreto_id'], 'required'],
            [['Departamento_id', 'Decreto_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Departamento_id' => Yii::t('models', 'Departamento ID'),
            'Decreto_id' => Yii::t('models', 'Decreto ID'),
        ];
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
    public function getDecreto()
    {
        return $this->hasOne(Decreto::className(), ['id' => 'Decreto_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\DepartamentoHasDecretoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DepartamentoHasDecretoQuery(get_called_class());
    }
}
