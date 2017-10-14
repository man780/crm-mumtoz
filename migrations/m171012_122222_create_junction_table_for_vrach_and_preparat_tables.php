<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vrach_preparat`.
 * Has foreign keys to the tables:
 *
 * - `vrach`
 * - `preparat`
 */
class m171012_122222_create_junction_table_for_vrach_and_preparat_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('vrach_preparat', [
            'vrach_id' => $this->integer(),
            'preparat_id' => $this->integer(),
            'created_at' => $this->dateTime(),
            'PRIMARY KEY(vrach_id, preparat_id)',
        ]);

        // creates index for column `vrach_id`
        $this->createIndex(
            'idx-vrach_preparat-vrach_id',
            'vrach_preparat',
            'vrach_id'
        );

        // add foreign key for table `vrach`
        $this->addForeignKey(
            'fk-vrach_preparat-vrach_id',
            'vrach_preparat',
            'vrach_id',
            'vrach',
            'id',
            'CASCADE'
        );

        // creates index for column `preparat_id`
        $this->createIndex(
            'idx-vrach_preparat-preparat_id',
            'vrach_preparat',
            'preparat_id'
        );

        // add foreign key for table `preparat`
        $this->addForeignKey(
            'fk-vrach_preparat-preparat_id',
            'vrach_preparat',
            'preparat_id',
            'preparat',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `vrach`
        $this->dropForeignKey(
            'fk-vrach_preparat-vrach_id',
            'vrach_preparat'
        );

        // drops index for column `vrach_id`
        $this->dropIndex(
            'idx-vrach_preparat-vrach_id',
            'vrach_preparat'
        );

        // drops foreign key for table `preparat`
        $this->dropForeignKey(
            'fk-vrach_preparat-preparat_id',
            'vrach_preparat'
        );

        // drops index for column `preparat_id`
        $this->dropIndex(
            'idx-vrach_preparat-preparat_id',
            'vrach_preparat'
        );

        $this->dropTable('vrach_preparat');
    }
}
