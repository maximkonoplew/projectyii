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
        $sql = 'CREATE TABLE category (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20), description VARCHAR(30));';
        Yii::$app->db->CreateCommand($sql)->execute();
        Yii::$app->db->createCommand()->batchInsert('category', ['name', 'description'], [
            ['Продукты', 'Из всех регионов России'],
            ['Одежда', 'Сделано не в Китае'],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
