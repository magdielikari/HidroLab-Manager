<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parametros".
 *
 * @property string $id
 * @property string $General_id
 * @property string $Limites_id
 *
 * @property Costoparametro[] $costoparametros
 * @property General $general
 * @property Limites $limites
 * @property ParametrosHasMuestras[] $parametrosHasMuestras
 * @property Muestras[] $muestras
 */
class Parametros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parametros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['General_id', 'Limites_id'], 'required'],
            [['General_id', 'Limites_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'General_id' => Yii::t('models', 'General ID'),
            'Limites_id' => Yii::t('models', 'Limites ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoparametros()
    {
        return $this->hasMany(Costoparametro::className(), ['Parametros_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneral()
    {
        return $this->hasOne(General::className(), ['id' => 'General_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLimites()
    {
        return $this->hasOne(Limites::className(), ['id' => 'Limites_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametrosHasMuestras()
    {
        return $this->hasMany(ParametrosHasMuestras::className(), ['Parametros_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuestras()
    {
        return $this->hasMany(Muestras::className(), ['id' => 'Muestras_id'])->viaTable('parametros_has_muestras', ['Parametros_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\ParametrosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ParametrosQuery(get_called_class());
    }
}
