<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rama_has_caracterizacion".
 *
 * @property string $Rama_id
 * @property integer $Caracterizacion_id
 *
 * @property Caracterizacion $caracterizacion
 * @property Rama $rama
 */
class RamaHasCaracterizacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rama_has_caracterizacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Rama_id', 'Caracterizacion_id'], 'required'],
            [['Rama_id', 'Caracterizacion_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Rama_id' => Yii::t('models', 'Rama ID'),
            'Caracterizacion_id' => Yii::t('models', 'Caracterizacion ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracterizacion()
    {
        return $this->hasOne(Caracterizacion::className(), ['id' => 'Caracterizacion_id']);
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
     * @return \common\models\query\RamaHasCaracterizacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\RamaHasCaracterizacionQuery(get_called_class());
    }
}
