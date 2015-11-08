<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parametros_has_muestras".
 *
 * @property string $Parametros_id
 * @property string $Muestras_id
 *
 * @property Muestras $muestras
 * @property Parametros $parametros
 */
class ParametrosHasMuestras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parametros_has_muestras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Parametros_id', 'Muestras_id'], 'required'],
            [['Parametros_id', 'Muestras_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Parametros_id' => Yii::t('models', 'Parametros ID'),
            'Muestras_id' => Yii::t('models', 'Muestras ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuestras()
    {
        return $this->hasOne(Muestras::className(), ['id' => 'Muestras_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametros()
    {
        return $this->hasOne(Parametros::className(), ['id' => 'Parametros_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\ParametrosHasMuestrasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ParametrosHasMuestrasQuery(get_called_class());
    }
}
