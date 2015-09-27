<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Puesto]].
 *
 * @see \common\models\Puesto
 */
class PuestoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Puesto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Puesto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}