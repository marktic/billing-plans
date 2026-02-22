<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingQuotesTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'billing_quotes';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('billable_type', 'string', ['limit' => 100])
            ->addColumn('billable_id', 'biginteger', ['signed' => false])
            ->addColumn('status', 'string', ['limit' => 20, 'default' => 'draft'])
            ->addColumn('currency', 'char', ['limit' => 3])
            ->addColumn('period_start', 'date')
            ->addColumn('period_end', 'date')
            ->addColumn('subtotal', 'decimal', ['precision' => 12, 'scale' => 4, 'default' => '0.0000'])
            ->addColumn('discount_amount', 'decimal', ['precision' => 12, 'scale' => 4, 'default' => '0.0000'])
            ->addColumn('tax_rate', 'decimal', ['precision' => 6, 'scale' => 4, 'default' => '0.0000'])
            ->addColumn('tax_amount', 'decimal', ['precision' => 12, 'scale' => 4, 'default' => '0.0000'])
            ->addColumn('total', 'decimal', ['precision' => 12, 'scale' => 4, 'default' => '0.0000'])
            ->addColumn('meta', 'json', ['null' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addIndex(['billable_type', 'billable_id'])
            ->addIndex(['status'])
            ->create();
    }
}
