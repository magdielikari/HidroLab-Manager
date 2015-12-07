<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\ParametrosHasMuestrasHasCostopredeterminados]].
 *
 * @see \common\models\ParametrosHasMuestrasHasCostopredeterminados
 */
class ParametrosHasMuestrasHasCostopredeterminadosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\ParametrosHasMuestrasHasCostopredeterminados[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\ParametrosHasMuestrasHasCostopredeterminados|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}