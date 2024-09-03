<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m240814_063426_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'description' => $this->text()->null(),
            'category' => $this->string()->notNull(),
            'price' => $this->integer(),
            'number' => $this->integer()
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $this->insert('product', [
            'name' => 'Мясо',
            'description' => 'Свинина и говядина',
            'category' => 'Продукты',
            'price' => 100,
            'number' => 10
        ]);

        $this->insert('product', [
            'name' => 'Рыба',
            'description' => 'Из всех морей России',
            'category' => 'Продукты',
            'price' => 200,
            'number' => 15
        ]);

        $this->insert('product', [
            'name' => 'Макароны',
            'description' => 'Как в Италии',
            'category' => 'Продукты',
            'price' => 50,
            'number' => 12
        ]);

        $this->insert('product', [
            'name' => 'Картофель',
            'description' => 'Второй хлеб на стол',
            'category' => 'Продукты',
            'price' => 20,
            'number' => 40
        ]);

        $this->insert('product', [
            'name' => 'Футболки',
            'description' => 'Все цвета радуги',
            'category' => 'Одежда',
            'price' => 100,
            'number' => 30
        ]);

        $this->insert('product', [
            'name' => 'Джинсы',
            'description' => 'Мужские и женские',
            'category' => 'Одежда',
            'price' => 90,
            'number' => 120
        ]);

        $this->insert('product', [
            'name' => 'Куртки',
            'description' => 'Для любого времени года',
            'category' => 'Одежда',
            'price' => 500,
            'number' => 70
        ]);

        $this->insert('product', [
            'name' => 'Перчатки',
            'description' => 'Для холодного времени года',
            'category' => 'Одежда',
            'price' => 120,
            'number' => 55
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
