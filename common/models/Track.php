<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "track".
 *
 * @property string $id
 * @property string $session
 * @property string $date
 * @property string $ip
 * @property string $user_id
 *
 * @property User $user
 */
class Track extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'track';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['session'], 'string', 'max' => 100],
            [['ip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'session' => Yii::t('models', 'Session'),
            'date' => Yii::t('models', 'Date'),
            'ip' => Yii::t('models', 'Ip'),
            'user_id' => Yii::t('models', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
