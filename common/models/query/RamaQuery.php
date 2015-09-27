<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Rama]].
 *
 * @see \common\models\Rama
 */
class RamaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Rama[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Rama|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}