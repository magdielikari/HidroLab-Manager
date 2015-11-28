<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dialaborables".
 *
 * @property string $id
 * @property string $dias
 * @property string $Referencia_id
 *
 * @property Referencia $referencia
 */
class Dialaborables extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dialaborables';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dias', 'Referencia_id'], 'required'],
            [['dias'], 'safe'],
            [['Referencia_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'dias' => Yii::t('models', 'Dias'),
            'Referencia_id' => Yii::t('models', 'Referencia ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReferencia()
    {
        return $this->hasOne(Referencia::className(), ['id' => 'Referencia_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\DialaborablesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DialaborablesQuery(get_called_class());
    }
}
