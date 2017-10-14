<?php

use yii\db\Migration;

/**
 * Handles the creation of table `preparat_sum`.
 * Has foreign keys to the tables:
 *
 * - `preparat`
 */
class m171012_093911_create_preparat_sum_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('preparat_sum', [
            'id' => $this->primaryKey(),
            'preparat_id' => $this->integer()->notNull(),
            'sum_in' => $this->float(),
            'sum_out' => $this->float(),
            'date' => $this->integer(11),
        ]);

        // creates index for column `preparat_id`
        $this->createIndex(
            'idx-preparat_sum-preparat_id',
            'preparat_sum',
            'preparat_id'
        );

        // add foreign key for table `preparat`
        $this->addForeignKey(
            'fk-preparat_sum-preparat_id',
            'preparat_sum',
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
        // drops foreign key for table `preparat`
        $this->dropForeignKey(
            'fk-preparat_sum-preparat_id',
            'preparat_sum'
        );

        // drops index for column `preparat_id`
        $this->dropIndex(
            'idx-preparat_sum-preparat_id',
            'preparat_sum'
        );

        $this->dropTable('preparat_sum');
    }
}
