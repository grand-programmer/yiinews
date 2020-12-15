<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\CategoryNews]].
 *
 * @see \common\models\CategoryNews
 */
class CategoryNewsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\CategoryNews[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\CategoryNews|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
