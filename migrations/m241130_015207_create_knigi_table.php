<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%knigi}}`.
 */
class m241130_015207_create_knigi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%knigi}}', [
            'id' => $this->primaryKey(),
            'nazvanie' => $this->string(15)->notNull(),
            'avtor' => $this->string(50)->notNull(),
            'god_vipuska' => $this->integer()->notNull(),
            'janr' => $this->string(30)->notNull(),
            'kolvo_str' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%knigi}}');
    }
}
