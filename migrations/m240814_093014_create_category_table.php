<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m240814_093014_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'description' => $this->text()->null()
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $this->insert('category', [
            'name' => 'Продукты',
            'description' => 'Из всех регионов России'
        ]);

        $this->insert('category', [
            'name' => 'Одежда',
            'description' => 'Сделано не в Китае'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
