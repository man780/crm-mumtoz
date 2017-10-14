<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vrach`.
 * Has foreign keys to the tables:
 *
 * - `bolnica`
 * - `position`
 */
class m171012_095520_create_vrach_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('vrach', [
            'id' => $this->primaryKey(),
            'bolnica_id' => $this->integer()->notNull(),
            'position_id' => $this->integer()->defaultValue(1),
            'fio' => $this->string(),
            'telefon' => $this->string(),
            'adres' => $this->string(),
            'text' => $this->text(),
            'potencial_mesyac' => $this->string(),
            'data_rojdeniya' => $this->integer(),
        ]);

        // creates index for column `bolnica_id`
        $this->createIndex(
            'idx-vrach-bolnica_id',
            'vrach',
            'bolnica_id'
        );

        // add foreign key for table `bolnica`
        $this->addForeignKey(
            'fk-vrach-bolnica_id',
            'vrach',
            'bolnica_id',
            'bolnica',
            'id',
            'CASCADE'
        );

        // creates index for column `position_id`
        $this->createIndex(
            'idx-vrach-position_id',
            'vrach',
            'position_id'
        );

        // add foreign key for table `position`
        $this->addForeignKey(
            'fk-vrach-position_id',
            'vrach',
            'position_id',
            'position',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `bolnica`
        $this->dropForeignKey(
            'fk-vrach-bolnica_id',
            'vrach'
        );

        // drops index for column `bolnica_id`
        $this->dropIndex(
            'idx-vrach-bolnica_id',
            'vrach'
        );

        // drops foreign key for table `position`
        $this->dropForeignKey(
            'fk-vrach-position_id',
            'vrach'
        );

        // drops index for column `position_id`
        $this->dropIndex(
            'idx-vrach-position_id',
            'vrach'
        );

        $this->dropTable('vrach');
    }
}
