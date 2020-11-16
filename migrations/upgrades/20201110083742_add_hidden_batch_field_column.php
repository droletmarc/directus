<?php

use Phinx\Migration\AbstractMigration;

class AddHiddenBatchFieldColumn extends AbstractMigration
{
    public function up()
    {
        $this->table('directus_fields')
            ->addColumn('hidden_batch', 'integer', ['length' => 1, 'signed' => false, 'default' => 0, 'comment' => 'If the field is hidden when edit in batch or not'])
            ->update();
    }

    public function down()
    {
        $this->table('directus_fields')
            ->removeColumn('hidden_batch')
            ->save();
    }

}
