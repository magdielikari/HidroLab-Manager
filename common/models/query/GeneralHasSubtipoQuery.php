<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\GeneralHasSubtipo]].
 *
 * @see \common\models\GeneralHasSubtipo
 */
class GeneralHasSubtipoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\GeneralHasSubtipo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\GeneralHasSubtipo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}