<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%portal_article}}".
 *
 * @property string $aid
 * @property string $title
 * @property string $author
 * @property string $uid
 * @property string $url
 * @property string $pic
 * @property string $desc
 * @property string $created_at
 * @property string $update_at
 * @property string $content
 * @property integer $status
 * @property integer $attr
 * @property string $username
 * @property string $cid
 */
class PortalArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%portal_article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author', 'desc', 'content', 'attr', 'username', 'cid'], 'required'],
            [['uid', 'created_at', 'update_at', 'status', 'attr', 'username', 'cid'], 'integer'],
            [['content'], 'string'],
            [['title', 'author', 'url', 'pic', 'desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => Yii::t('app', 'Aid'),
            'title' => Yii::t('app', '标题'),
            'author' => Yii::t('app', '作者'),
            'uid' => Yii::t('app', '发布人'),
            'url' => Yii::t('app', '跳转地址'),
            'pic' => Yii::t('app', '缩略图'),
            'desc' => Yii::t('app', '简介'),
            'created_at' => Yii::t('app', '发布时间'),
            'update_at' => Yii::t('app', '更新时间'),
            'content' => Yii::t('app', '内容'),
            'status' => Yii::t('app', '状态'),
            'attr' => Yii::t('app', '属性'),
            'username' => Yii::t('app', '用户名'),
            'cid' => Yii::t('app', '所属栏目'),
        ];
    }

    /**
     * @inheritdoc
     * @return PortalArticleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PortalArticleQuery(get_called_class());
    }
}
