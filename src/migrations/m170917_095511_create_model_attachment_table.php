<?php

use yii\db\Migration;

/**
 * Handles the creation of table `model_attachment`.
 */
class m170917_095511_create_model_attachment_table extends Migration
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
        $this->createTable('{{%model_attachment}}', [
            'id' => $this->primaryKey(),
            'model' => $this->string()->notNull(),
            'item_id' => $this->integer()->notNull(),
            'attachment_id' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->createIndex('file_model', '{{%model_attachment}}', 'model');
        $this->createIndex('file_item_id', '{{%model_attachment}}', 'item_idd');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%model_attachment}}');
    }
}
