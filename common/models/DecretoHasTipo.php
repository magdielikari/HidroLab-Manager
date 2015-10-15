<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "decreto_has_tipo".
 *
 * @property integer $Decreto_id
 * @property integer $Tipo_id
 *
 * @property Decreto $decreto
 * @property Tipo $tipo
 */
class DecretoHasTipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'decreto_has_tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Decreto_id', 'Tipo_id'], 'required'],
            [['Decreto_id', 'Tipo_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Decreto_id' => Yii::t('models', 'Decreto ID'),
            'Tipo_id' => Yii::t('models', 'Tipo ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDecreto()
    {
        return $this->hasOne(Decreto::className(), ['id' => 'Decreto_id']);
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
     * @return \common\models\query\DecretoHasTipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DecretoHasTipoQuery(get_called_class());
    }
}
