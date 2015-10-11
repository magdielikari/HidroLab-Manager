<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "muestras".
 *
 * @property string $id
 * @property string $Nombre
 * @property string $tipo
 * @property integer $horas
 * @property string $General_id
 *
 * @property Costomuestra[] $costomuestras
 * @property General $general
 * @property ParametrosHasMuestras[] $parametrosHasMuestras
 * @property Parametros[] $parametros
 * @property Peticion[] $peticions
 */
class Muestras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'muestras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['horas', 'General_id'], 'integer'],
            [['General_id'], 'required'],
            [['Nombre'], 'string', 'max' => 45],
            [['tipo'], 'string', 'max' => 1]
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
            'tipo' => Yii::t('models', 'Tipo'),
            'horas' => Yii::t('models', 'Horas'),
            'General_id' => Yii::t('models', 'General ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostomuestras()
    {
        return $this->hasMany(Costomuestra::className(), ['Muestras_id' => 'id']);
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
    public function getParametrosHasMuestras()
    {
        return $this->hasMany(ParametrosHasMuestras::className(), ['Muestras_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParametros()
    {
        return $this->hasMany(Parametros::className(), ['id' => 'Parametros_id'])->viaTable('parametros_has_muestras', ['Muestras_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeticions()
    {
        return $this->hasMany(Peticion::className(), ['Muestras_id' => 'id']);
    }
}
