<?php

use yii\db\Schema;
use yii\db\Migration;

class m141020_193919_add_log_table extends Migration
{
    public function up()
    {
        $this->createTable('log', [
            'id' => 'pk',
            'level' => 'int',
            'category' => 'string',
            'log_time' => 'int',
            'prefix' => 'text'
        ]);
    }

    public function down()
    {
        $this->dropTable('log');
    }
}
