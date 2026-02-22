<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingUsageEventsTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'mkt_billing_usage_events';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('billable_type', 'string', ['limit' => 100])
            ->addColumn('billable_id', 'biginteger', ['signed' => false])
            ->addColumn('feature_id', 'biginteger', ['signed' => false])
            ->addColumn('event_type', 'string', ['limit' => 20])
            ->addColumn('quantity', 'decimal', ['precision' => 12, 'scale' => 4])
            ->addColumn('reference_type', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('reference_id', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('triggered_type', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('triggered_id', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('description', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('meta', 'json', ['null' => true])
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addIndex(['billable_type', 'billable_id', 'feature_id'])
            ->addIndex(['reference_type', 'reference_id'])
            ->addForeignKey('feature_id', 'mkt_billing_features', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->create();
    }
}
