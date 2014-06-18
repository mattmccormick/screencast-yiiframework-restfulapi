<?php

class m140613_080216_create_frogs_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('frogs', [
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'colour' => 'string'
        ]);
	}

	public function down()
	{
		$this->dropTable('frogs');
	}
}