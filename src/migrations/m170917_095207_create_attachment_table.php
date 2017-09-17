<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery_file`.
 */
class m170917_095207_create_attachment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%attachment}}', [
            'id' => $this->primaryKey(),
            'gallery_id' => $this->integer()->notNull(),
            'file' => $this->string()->notNull(),
            'caption' => $this->string(),
            'position' => $this->integer()->defaultValue(0),
            'md5' => $this->string()->notNull(),
            'size' => $this->integer()->notNull(),
            'type' => $this->string()->notNull(),
            'mime' => $this->string()->notNull(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%attachment}}');
    }
}
