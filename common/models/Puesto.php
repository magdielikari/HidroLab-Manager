<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "puesto".
 *
 * @property integer $id
 * @property string $Nombre
 *
 * @property User[] $users
 */
class Puesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'puesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'Nombre' => Yii::t('models', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['puesto_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\PuestoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PuestoQuery(get_called_class());
    }
}
