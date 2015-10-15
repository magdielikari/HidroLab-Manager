<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tipo_has_subtipo".
 *
 * @property integer $Tipo_id
 * @property integer $SubTipo_id
 *
 * @property Tipo $tipo
 * @property Subtipo $subTipo
 */
class TipoHasSubtipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_has_subtipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tipo_id', 'SubTipo_id'], 'required'],
            [['Tipo_id', 'SubTipo_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Tipo_id' => Yii::t('models', 'Tipo ID'),
            'SubTipo_id' => Yii::t('models', 'Sub Tipo ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'Tipo_id']);
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
     * @return \common\models\query\TipoHasSubtipoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TipoHasSubtipoQuery(get_called_class());
    }
}
