<?php

use yii\db\Migration;

class m160714_154743_init_phone_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'phone',
            [
                'id' => 'pk',
                'customer_id' => 'int unique',
                'number' => 'string',                
            ],
            'ENGINE=InnoDB'
            );
        $this->addForeignKey('customer_phone_numbers', 'phone', 'customer_id', 'customer', 'id');
    }

    public function down()
    {
        echo "m160714_154743_init_phone_table cannot be reverted.\n";
        $this->dropForeignKey('customer_phone_numbers', 'phone');
        $this->dropTable('phone');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
