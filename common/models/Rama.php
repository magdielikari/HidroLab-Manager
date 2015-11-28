<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rama".
 *
 * @property string $id
 * @property string $nombre
 *
 * @property Limites[] $limites
 * @property RamaHasCaracterizacion[] $ramaHasCaracterizacions
 * @property Caracterizacion[] $caracterizacions
 * @property RamaHasGeneral[] $ramaHasGenerals
 * @property General[] $generals
 */
class Rama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rama';
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
    public function getLimites()
    {
        return $this->hasMany(Limites::className(), ['Rama_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRamaHasCaracterizacions()
    {
        return $this->hasMany(RamaHasCaracterizacion::className(), ['Rama_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacions()
    {
        return $this->hasMany(Caracterizacion::className(), ['id' => 'Caracterizacion_id'])->viaTable('rama_has_caracterizacion', ['Rama_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRamaHasGenerals()
    {
        return $this->hasMany(RamaHasGeneral::className(), ['Rama_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['id' => 'General_id'])->viaTable('rama_has_general', ['Rama_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\RamaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RamaQuery(get_called_class());
    }
}
