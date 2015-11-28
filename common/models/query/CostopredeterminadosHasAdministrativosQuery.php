<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\CostopredeterminadosHasAdministrativos]].
 *
 * @see \common\models\CostopredeterminadosHasAdministrativos
 */
class CostopredeterminadosHasAdministrativosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\CostopredeterminadosHasAdministrativos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\CostopredeterminadosHasAdministrativos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}