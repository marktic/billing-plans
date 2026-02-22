<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingPlanPricesTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'billing_plan_prices';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('plan_id', 'biginteger', ['signed' => false])
            ->addColumn('interval', 'string', ['limit' => 20])
            ->addColumn('interval_count', 'integer', ['signed' => false, 'default' => 1])
            ->addColumn('price', 'decimal', ['precision' => 12, 'scale' => 4])
            ->addColumn('currency', 'char', ['limit' => 3])
            ->addColumn('trial_days', 'integer', ['signed' => false, 'null' => true])
            ->addColumn('is_default', 'boolean', ['default' => false])
            ->addTimestamps()
            ->addIndex(['plan_id'])
            ->addIndex(['plan_id', 'currency', 'interval', 'interval_count'], [
                'unique' => true,
                'name' => 'billing_plan_prices_plan_interval_currency_unique',
            ])
            ->addForeignKey('plan_id', 'billing_plans', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->create();
    }
}
