<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%category_news}}".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $news_id
 */
class CategoryNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category_news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'news_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'news_id' => 'News ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CategoryNewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CategoryNewsQuery(get_called_class());
    }
}
