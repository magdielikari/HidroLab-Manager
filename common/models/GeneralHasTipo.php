<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "general_has_tipo".
 *
 * @property string $General_id
 * @property integer $Tipo_id
 *
 * @property General $general
 * @property Tipo $tipo
 */
class GeneralHasTipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general_has_tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['General_id', 'Tipo_id'], 'required'],
            [['General_id', 'Tipo_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'General_id' => Yii::t('models', 'General ID'),
            'Tipo_id' => Yii::t('models', 'Tipo ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneral()
    {
        return $this->hasOne(General::className(), ['id' => 'General_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'Tipo_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\GeneralHasTipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\GeneralHasTipoQuery(get_called_class());
    }
}
