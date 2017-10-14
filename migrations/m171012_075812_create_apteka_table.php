<?php

use yii\db\Migration;

/**
 * Handles the creation of table `apteka`.
 */
class m171012_075812_create_apteka_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('apteka', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'text' => $this->text(),
            'address' => $this->string(),
            'telefon' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('apteka');
    }
}
