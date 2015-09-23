<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PortalArticle;

/**
 * PortalArticleSearch represents the model behind the search form about `backend\models\PortalArticle`.
 */
class PortalArticleSearch extends PortalArticle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aid', 'uid', 'created_at', 'update_at', 'status', 'attr', 'username', 'cid'], 'integer'],
            [['title', 'author', 'url', 'pic', 'desc', 'content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PortalArticle::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'aid' => $this->aid,
            'uid' => $this->uid,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'status' => $this->status,
            'attr' => $this->attr,
            'username' => $this->username,
            'cid' => $this->cid,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'pic', $this->pic])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
