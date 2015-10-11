<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "decreto".
 *
 * @property integer $id
 * @property string $Nombre
 * @property string $Gaceta
 * @property string $Fecha
 *
 * @property DecretoHasTipo[] $decretoHasTipos
 * @property Tipo[] $tipos
 * @property DepartamentoHasDecreto[] $departamentoHasDecretos
 * @property Departamento[] $departamentos
 * @property General[] $generals
 * @property Limites[] $limites
 */
class Decreto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'decreto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fecha'], 'safe'],
            [['Nombre'], 'string', 'max' => 90],
            [['Gaceta'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'Nombre' => Yii::t('models', 'Nombre'),
            'Gaceta' => Yii::t('models', 'Gaceta'),
            'Fecha' => Yii::t('models', 'Fecha'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecretoHasTipos()
    {
        return $this->hasMany(DecretoHasTipo::className(), ['Decreto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasMany(Tipo::className(), ['id' => 'Tipo_id'])->viaTable('decreto_has_tipo', ['Decreto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentoHasDecretos()
    {
        return $this->hasMany(DepartamentoHasDecreto::className(), ['Decreto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['id' => 'Departamento_id'])->viaTable('departamento_has_decreto', ['Decreto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['Decreto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLimites()
    {
        return $this->hasMany(Limites::className(), ['Decreto_id' => 'id']);
    }
}
