<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "carea".
 *
 * @property integer $id
 * @property integer $nombre
 * @property string $Celular_id
 *
 * @property Celular $celular
 */
class Carea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'Celular_id'], 'integer'],
            [['Celular_id'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'nombre' => Yii::t('models', 'Nombre'),
            'Celular_id' => Yii::t('models', 'Celular ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCelular()
    {
        return $this->hasOne(Celular::className(), ['id' => 'Celular_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CareaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CareaQuery(get_called_class());
    }
}
