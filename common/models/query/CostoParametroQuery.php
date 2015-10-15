<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Costoparametro]].
 *
 * @see \common\models\Costoparametro
 */
class CostoparametroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Costoparametro[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Costoparametro|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}