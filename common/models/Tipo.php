<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property DecretoHasTipo[] $decretoHasTipos
 * @property Decreto[] $decretos
 * @property GeneralHasTipo[] $generalHasTipos
 * @property General[] $generals
 * @property Limites[] $limites
 * @property TipoHasSubtipo[] $tipoHasSubtipos
 * @property Subtipo[] $subTipos
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
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
    public function getDecretoHasTipos()
    {
        return $this->hasMany(DecretoHasTipo::className(), ['Tipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecretos()
    {
        return $this->hasMany(Decreto::className(), ['id' => 'Decreto_id'])->viaTable('decreto_has_tipo', ['Tipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneralHasTipos()
    {
        return $this->hasMany(GeneralHasTipo::className(), ['Tipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['id' => 'General_id'])->viaTable('general_has_tipo', ['Tipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLimites()
    {
        return $this->hasMany(Limites::className(), ['Tipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoHasSubtipos()
    {
        return $this->hasMany(TipoHasSubtipo::className(), ['Tipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubTipos()
    {
        return $this->hasMany(Subtipo::className(), ['id' => 'SubTipo_id'])->viaTable('tipo_has_subtipo', ['Tipo_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\TipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TipoQuery(get_called_class());
    }
}
