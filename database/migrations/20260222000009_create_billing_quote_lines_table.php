<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingQuoteLinesTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'mkt_billing_quote_lines';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('quote_id', 'biginteger', ['signed' => false])
            ->addColumn('plan_id', 'biginteger', ['signed' => false, 'null' => true])
            ->addColumn('feature_id', 'biginteger', ['signed' => false, 'null' => true])
            ->addColumn('description', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('quantity', 'decimal', ['precision' => 12, 'scale' => 4])
            ->addColumn('unit', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('unit_price', 'integer', ['signed' => true])
            ->addColumn('subtotal', 'integer', ['signed' => true])
            ->addColumn('period_start', 'date', ['null' => true])
            ->addColumn('period_end', 'date', ['null' => true])
            ->addColumn('order', 'smallinteger', ['signed' => false, 'default' => 0])
            ->addColumn('meta', 'json', ['null' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addIndex(['quote_id'])
            ->addIndex(['plan_id'])
            ->addIndex(['feature_id'])
            ->addForeignKey('quote_id', 'mkt_billing_quotes', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->addForeignKey('plan_id', 'mkt_billing_plans', 'id', [
                'delete' => 'SET_NULL',
                'update' => 'NO_ACTION',
            ])
            ->addForeignKey('feature_id', 'mkt_billing_features', 'id', [
                'delete' => 'SET_NULL',
                'update' => 'NO_ACTION',
            ])
            ->create();
    }
}
