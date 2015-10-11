<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_rest_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $update_at
 *
 * @property Track[] $tracks
 * @property Vendedor[] $vendedors
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'update_at'], 'required'],
            [['status', 'created_at', 'update_at'], 'integer'],
            [['username', 'password_hash', 'password_rest_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'username' => Yii::t('models', 'Username'),
            'auth_key' => Yii::t('models', 'Auth Key'),
            'password_hash' => Yii::t('models', 'Password Hash'),
            'password_rest_token' => Yii::t('models', 'Password Rest Token'),
            'email' => Yii::t('models', 'Email'),
            'status' => Yii::t('models', 'Status'),
            'created_at' => Yii::t('models', 'Created At'),
            'update_at' => Yii::t('models', 'Update At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTracks()
    {
        return $this->hasMany(Track::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedors()
    {
        return $this->hasMany(Vendedor::className(), ['user_id' => 'id']);
    }
}
