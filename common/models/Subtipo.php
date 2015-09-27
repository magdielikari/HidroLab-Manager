<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subtipo".
 *
 * @property integer $id
 * @property string $Nombre
 *
 * @property Limites[] $limites
 * @property TipoHasSubtipo[] $tipoHasSubtipos
 * @property Tipo[] $tipos
 */
class Subtipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subtipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['Nombre'], 'string', 'max' => 45]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLimites()
    {
        return $this->hasMany(Limites::className(), ['SubTipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoHasSubtipos()
    {
        return $this->hasMany(TipoHasSubtipo::className(), ['SubTipo_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipos()
    {
        return $this->hasMany(Tipo::className(), ['id' => 'Tipo_id'])->viaTable('tipo_has_subtipo', ['SubTipo_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\SubtipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SubtipoQuery(get_called_class());
    }
}
