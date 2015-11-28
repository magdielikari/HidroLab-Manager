<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "carea".
 *
 * @property integer $id
 * @property integer $nombre
 *
 * @property Celular[] $celulars
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
            [['nombre'], 'required'],
            [['nombre'], 'integer']
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCelulars()
    {
        return $this->hasMany(Celular::className(), ['CArea_id' => 'id']);
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
