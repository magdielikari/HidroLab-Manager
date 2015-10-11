<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cArea".
 *
 * @property integer $id
 * @property integer $nombre
 * @property string $celular_id
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
            [['nombre', 'celular_id'], 'integer'],
            [['celular_id'], 'required']
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
            'celular_id' => Yii::t('models', 'Celular ID'),
        ];
    }
}
