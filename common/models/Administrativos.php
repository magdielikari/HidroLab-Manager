<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "administrativos".
 *
 * @property string $id
 * @property string $tipo
 * @property double $total
 *
 * @property CostopredeterminadosHasAdministrativos[] $costopredeterminadosHasAdministrativos
 * @property Costopredeterminados[] $costoPredeterminados
 */
class Administrativos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrativos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo', 'total'], 'required'],
            [['total'], 'number'],
            [['tipo'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'tipo' => Yii::t('models', 'Tipo'),
            'total' => Yii::t('models', 'Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostopredeterminadosHasAdministrativos()
    {
        return $this->hasMany(CostopredeterminadosHasAdministrativos::className(), ['Administrativos_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostoPredeterminados()
    {
        return $this->hasMany(Costopredeterminados::className(), ['id' => 'CostoPredeterminados_id'])->viaTable('costopredeterminados_has_administrativos', ['Administrativos_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\AdministrativosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AdministrativosQuery(get_called_class());
    }
}
