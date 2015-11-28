<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "referencia".
 *
 * @property string $id
 * @property string $ano
 *
 * @property Dialaborables[] $dialaborables
 * @property Peticion[] $peticions
 */
class Referencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'referencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ano'], 'required'],
            [['ano'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'ano' => Yii::t('models', 'Ano'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDialaborables()
    {
        return $this->hasMany(Dialaborables::className(), ['Referencia_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeticions()
    {
        return $this->hasMany(Peticion::className(), ['Referencia_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\ReferenciaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ReferenciaQuery(get_called_class());
    }
}
