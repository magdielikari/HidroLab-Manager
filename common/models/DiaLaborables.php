<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dialaborables".
 *
 * @property string $id
 * @property string $dias
 * @property string $referencia_id
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
            [['dias'], 'safe'],
            [['referencia_id'], 'required'],
            [['referencia_id'], 'integer']
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
            'referencia_id' => Yii::t('models', 'Referencia ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReferencia()
    {
        return $this->hasOne(Referencia::className(), ['id' => 'referencia_id']);
    }
}
