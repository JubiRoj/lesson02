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
        $this->execute(file_get_contents(__DIR__ , '/lesson1_dump.sql'));
        //$this->createTable('theme', [
         //   'id' => $this->primaryKey(),
        //]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('theme');
    }
}
