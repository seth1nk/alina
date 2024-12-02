<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%parf}}`.
 */
class m241202_013000_create_parf_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%parf}}', [
            'id' => $this->primaryKey(),
            'nazvanie' => $this->string(15)->notNull(),
            'brand' => $this->string(50)->notNull(),
            'obyem' => $this->float()->notNull(),
            'pol' => $this->string(30)->notNull(),
            'cena' => $this->float()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%parf}}');
    }
}
