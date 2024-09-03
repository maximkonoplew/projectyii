<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%basket}}`.
 */
class m240827_101505_create_basket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('basket', [
            'id_product' => $this->integer(),
            'price' => $this->integer(),
            'number' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('basket');
    }
}
