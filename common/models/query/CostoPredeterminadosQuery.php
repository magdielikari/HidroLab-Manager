<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\CostoPredeterminados]].
 *
 * @see \common\models\CostoPredeterminados
 */
class CostoPredeterminadosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\CostoPredeterminados[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\CostoPredeterminados|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}