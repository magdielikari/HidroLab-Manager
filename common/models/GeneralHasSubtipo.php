<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "general_has_subtipo".
 *
 * @property string $General_id
 * @property integer $SubTipo_id
 *
 * @property General $general
 * @property Subtipo $subTipo
 */
class GeneralHasSubtipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general_has_subtipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['General_id', 'SubTipo_id'], 'required'],
            [['General_id', 'SubTipo_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'General_id' => Yii::t('models', 'General ID'),
            'SubTipo_id' => Yii::t('models', 'Sub Tipo ID'),
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
    public function getSubTipo()
    {
        return $this->hasOne(Subtipo::className(), ['id' => 'SubTipo_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\GeneralHasSubtipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\GeneralHasSubtipoQuery(get_called_class());
    }
}
