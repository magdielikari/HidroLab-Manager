<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Dialaborables]].
 *
 * @see \common\models\Dialaborables
 */
class DialaborablesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Dialaborables[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Dialaborables|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}