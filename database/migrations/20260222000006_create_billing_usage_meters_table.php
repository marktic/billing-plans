<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingUsageMetersTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'billing_usage_meters';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('billable_type', 'string', ['limit' => 100])
            ->addColumn('billable_id', 'biginteger', ['signed' => false])
            ->addColumn('feature_id', 'biginteger', ['signed' => false])
            ->addColumn('period_start', 'date')
            ->addColumn('period_end', 'date')
            ->addColumn('used_amount', 'decimal', ['precision' => 12, 'scale' => 4, 'default' => '0.0000'])
            ->addTimestamps()
            ->addIndex(['billable_type', 'billable_id'])
            ->addIndex(['feature_id'])
            ->addIndex(['billable_type', 'billable_id', 'feature_id', 'period_start'], [
                'unique' => true,
                'name' => 'billing_usage_meters_billable_feature_period_unique',
            ])
            ->addForeignKey('feature_id', 'billing_features', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->create();
    }
}
