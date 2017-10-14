<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bolnica`.
 */
class m171012_092717_create_bolnica_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('bolnica', [
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
        $this->dropTable('bolnica');
    }
}
