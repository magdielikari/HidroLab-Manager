<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costoParametro".
 *
 * @property integer $id
 * @property double $tMateriales
 * @property double $tEquipos
 * @property double $tMano
 * @property string $Parametros_id
 */
class CostoParametro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costoParametro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tMateriales', 'tEquipos', 'tMano'], 'number'],
            [['Parametros_id'], 'required'],
            [['Parametros_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'tMateriales' => Yii::t('models', 'T Materiales'),
            'tEquipos' => Yii::t('models', 'T Equipos'),
            'tMano' => Yii::t('models', 'T Mano'),
            'Parametros_id' => Yii::t('models', 'Parametros ID'),
        ];
    }
}
