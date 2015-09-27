<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cArea".
 *
 * @property integer $id
 * @property integer $nombre
 */
class CArea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cArea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'nombre'], 'integer']
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
     * @inheritdoc
     * @return \common\models\query\CAreaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CAreaQuery(get_called_class());
    }
}
