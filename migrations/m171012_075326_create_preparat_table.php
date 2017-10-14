<?php

use yii\db\Migration;

/**
 * Handles the creation of table `preparat`.
 */
class m171012_075326_create_preparat_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('preparat', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('preparat');
    }
}
