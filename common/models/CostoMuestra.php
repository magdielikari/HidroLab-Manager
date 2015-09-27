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

    /**
     * @inheritdoc
     * @return \common\models\query\CostoMuestraQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostoMuestraQuery(get_called_class());
    }
}
