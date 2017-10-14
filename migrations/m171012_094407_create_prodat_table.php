<?php

use yii\db\Migration;

/**
 * Handles the creation of table `prodat`.
 * Has foreign keys to the tables:
 *
 * - `preparat`
 * - `apteka`
 */
class m171012_094407_create_prodat_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('prodat', [
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
            'idx-prodat-preparat_id',
            'prodat',
            'preparat_id'
        );

        // add foreign key for table `preparat`
        $this->addForeignKey(
            'fk-prodat-preparat_id',
            'prodat',
            'preparat_id',
            'preparat',
            'id',
            'CASCADE'
        );

        // creates index for column `apteka_id`
        $this->createIndex(
            'idx-prodat-apteka_id',
            'prodat',
            'apteka_id'
        );

        // add foreign key for table `apteka`
        $this->addForeignKey(
            'fk-prodat-apteka_id',
            'prodat',
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
            'fk-prodat-preparat_id',
            'prodat'
        );

        // drops index for column `preparat_id`
        $this->dropIndex(
            'idx-prodat-preparat_id',
            'prodat'
        );

        // drops foreign key for table `apteka`
        $this->dropForeignKey(
            'fk-prodat-apteka_id',
            'prodat'
        );

        // drops index for column `apteka_id`
        $this->dropIndex(
            'idx-prodat-apteka_id',
            'prodat'
        );

        $this->dropTable('prodat');
    }
}
