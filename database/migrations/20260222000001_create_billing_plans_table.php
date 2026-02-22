<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingPlansTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'billing_plans';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('slug', 'string', ['limit' => 100])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('status', 'string', ['limit' => 20, 'default' => 'public'])
            ->addTimestamps()
            ->addIndex(['slug'], ['unique' => true, 'name' => 'billing_plans_slug_unique'])
            ->addIndex(['status'])
            ->create();
    }
}
