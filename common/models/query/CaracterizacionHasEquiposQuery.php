<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\CaracterizacionHasEquipos]].
 *
 * @see \common\models\CaracterizacionHasEquipos
 */
class CaracterizacionHasEquiposQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\CaracterizacionHasEquipos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\CaracterizacionHasEquipos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}