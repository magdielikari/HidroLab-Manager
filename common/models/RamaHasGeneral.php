<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rama_has_general".
 *
 * @property string $Rama_id
 * @property string $General_id
 *
 * @property General $general
 * @property Rama $rama
 */
class RamaHasGeneral extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rama_has_general';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Rama_id', 'General_id'], 'required'],
            [['Rama_id', 'General_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Rama_id' => Yii::t('models', 'Rama ID'),
            'General_id' => Yii::t('models', 'General ID'),
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
    public function getRama()
    {
        return $this->hasOne(Rama::className(), ['id' => 'Rama_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\RamaHasGeneralQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RamaHasGeneralQuery(get_called_class());
    }
}
