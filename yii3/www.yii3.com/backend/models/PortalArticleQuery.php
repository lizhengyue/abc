<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[PortalArticle]].
 *
 * @see PortalArticle
 */
class PortalArticleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return PortalArticle[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PortalArticle|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}