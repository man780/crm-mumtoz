<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bron`.
 * Has foreign keys to the tables:
 *
 * - `preparat`
 * - `apteka`
 */
class m171012_094609_create_bron_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('bron', [
            'id' => $this->primaryKey(),
            'preparat_id' => $this->integer()->notNull(),
            'apteka_id' => $this->integer()->notNull(),
            'sum' => $this->integer(),
            'kolvo' => $this->integer(),
            'text' => $this->text(),
            'date' => $this->integer(11),
        ]);

        // creates index for column `preparat_id`
        $this->createIndex(
            'idx-bron-preparat_id',
            'bron',
            'preparat_id'
        );

        // add foreign key for table `preparat`
        $this->addForeignKey(
            'fk-bron-preparat_id',
            'bron',
            'preparat_id',
            'preparat',
            'id',
            'CASCADE'
        );

        // creates index for column `apteka_id`
        $this->createIndex(
            'idx-bron-apteka_id',
            'bron',
            'apteka_id'
        );

        // add foreign key for table `apteka`
        $this->addForeignKey(
            'fk-bron-apteka_id',
            'bron',
            'apteka_id',
            'apteka',
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
            'fk-bron-preparat_id',
            'bron'
        );

        // drops index for column `preparat_id`
        $this->dropIndex(
            'idx-bron-preparat_id',
            'bron'
        );

        // drops foreign key for table `apteka`
        $this->dropForeignKey(
            'fk-bron-apteka_id',
            'bron'
        );

        // drops index for column `apteka_id`
        $this->dropIndex(
            'idx-bron-apteka_id',
            'bron'
        );

        $this->dropTable('bron');
    }
}
