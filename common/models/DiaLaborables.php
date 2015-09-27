<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "diaLaborables".
 *
 * @property string $id
 * @property string $dias
 * @property string $referencia_id
 */
class DiaLaborables extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diaLaborables';
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
     * @inheritdoc
     * @return \common\models\query\DiaLaborablesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DiaLaborablesQuery(get_called_class());
    }
}
