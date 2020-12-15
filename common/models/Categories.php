<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%categories}}".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $parent
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }
    public function getNews() {
        return $this->hasMany(News::className(), ['id' => 'news_id'])
                    ->viaTable('category_news', ['category_id' => 'id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['parent'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent' => 'Parent',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CategoriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CategoriesQuery(get_called_class());
    }
}
