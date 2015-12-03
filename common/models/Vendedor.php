<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vendedor".
 *
 * @property integer $id
 * @property integer $Puesto_id
 * @property string $user_id
 *
 * @property Celular[] $celulars
 * @property General[] $generals
 * @property Plantilla[] $plantillas
 * @property Puesto $puesto
 * @property User $user
 */
class Vendedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Puesto_id', 'user_id'], 'required'],
            [['Puesto_id', 'user_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'Puesto_id' => Yii::t('models', 'Puesto ID'),
            'user_id' => Yii::t('models', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCelulars()
    {
        return $this->hasMany(Celular::className(), ['Vendedor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenerals()
    {
        return $this->hasMany(General::className(), ['Vendedor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlantillas()
    {
        return $this->hasMany(Plantilla::className(), ['Vendedor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPuesto()
    {
        return $this->hasOne(Puesto::className(), ['id' => 'Puesto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\VendedorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\VendedorQuery(get_called_class());
    }
}
