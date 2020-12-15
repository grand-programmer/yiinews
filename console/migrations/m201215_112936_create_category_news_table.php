<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_news}}`.
 */
class m201215_112936_create_category_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category_news}}', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer(100),
            'news_id'=>$this->integer(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_news}}');
    }
}
