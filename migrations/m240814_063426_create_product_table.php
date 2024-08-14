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
        $sql = 'CREATE TABLE product (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20), description VARCHAR(30), category  VARCHAR(20));';
        Yii::$app->db->CreateCommand($sql)->execute();
        Yii::$app->db->createCommand()->batchInsert('product', ['name', 'description', 'category'], [
            ['Мясо', 'Свинина и говядина', 'Продукты'],
            ['Рыба', 'Из всех морей России', 'Продукты'],
            ['Макароны', 'Как в Италии', 'Продукты'],
            ['Картофель', 'Второй хлеб на стол', 'Продукты'],
            ['Футболки', 'Все цвета радуги', 'Одежда'],
            ['Джинсы', 'Мужские и женские', 'Одежда'],
            ['Куртки', 'Для любого времени года', 'Одежда'],
            ['Перчатки', 'Для холодного времени года', 'Одежда'],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
