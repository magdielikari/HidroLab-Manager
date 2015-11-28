<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "costopredeterminados_has_administrativos".
 *
 * @property string $CostoPredeterminados_id
 * @property string $Administrativos_id
 * @property double $cantidad
 * @property double $dias
 *
 * @property Costopredeterminados $costoPredeterminados
 * @property Administrativos $administrativos
 */
class CostopredeterminadosHasAdministrativos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'costopredeterminados_has_administrativos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CostoPredeterminados_id', 'Administrativos_id', 'cantidad', 'dias'], 'required'],
            [['CostoPredeterminados_id', 'Administrativos_id'], 'integer'],
            [['cantidad', 'dias'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CostoPredeterminados_id' => Yii::t('models', 'Costo Predeterminados ID'),
            'Administrativos_id' => Yii::t('models', 'Administrativos ID'),
            'cantidad' => Yii::t('models', 'Cantidad'),
            'dias' => Yii::t('models', 'Dias'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoPredeterminados()
    {
        return $this->hasOne(Costopredeterminados::className(), ['id' => 'CostoPredeterminados_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrativos()
    {
        return $this->hasOne(Administrativos::className(), ['id' => 'Administrativos_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\CostopredeterminadosHasAdministrativosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CostopredeterminadosHasAdministrativosQuery(get_called_class());
    }
}
