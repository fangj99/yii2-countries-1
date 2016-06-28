<?php

use yii\db\Migration;

class m160628_164339_country_table extends Migration
{
    protected $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    
    public function safeUp()
    {
        $this->createTable('country', [
            'id' => $this->string(2)->notNull(), //ISO-2 Code is considered ID, more space allocated to keep things flexible
            'has_postcodes' => $this->boolean()->notNull()->defaultValue(FALSE),
                ], $this->tableOptions);

        $this->addPrimaryKey('pk_country', 'country', 'id');
        $this->createIndex('idx_default_country', 'country', 'has_postcodes');
    }

    public function safeDown()
    {        
        $this->dropTable('country');            
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
