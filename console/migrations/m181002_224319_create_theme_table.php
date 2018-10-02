<?php

use yii\db\Migration;

/**
 * Handles the creation of table `theme`.
 */
class m181002_224319_create_theme_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('theme', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('theme');
    }
}
