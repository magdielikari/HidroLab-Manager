<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costoMuestra".
 *
 * @property string $id
 * @property string $Muestras_id
 * @property double $total
 */
class CostoMuestra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costoMuestra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Muestras_id'], 'required'],
            [['Muestras_id'], 'integer'],
            [['total'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'Muestras_id' => Yii::t('models', 'Muestras ID'),
            'total' => Yii::t('models', 'Total'),
        ];
    }
}
