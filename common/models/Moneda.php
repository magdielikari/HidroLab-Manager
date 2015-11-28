<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "moneda".
 *
 * @property string $id
 * @property string $nombre
 * @property double $conversion
 *
 * @property Costopredeterminados[] $costopredeterminados
 */
class Moneda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'moneda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'conversion'], 'required'],
            [['conversion'], 'number'],
            [['nombre'], 'string', 'max' => 45]
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
            'conversion' => Yii::t('models', 'Conversion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminados()
    {
        return $this->hasMany(Costopredeterminados::className(), ['Moneda_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\MonedaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\MonedaQuery(get_called_class());
    }
}
