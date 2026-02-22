<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingPlanFeaturesTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'billing_plan_features';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('plan_id', 'biginteger', ['signed' => false])
            ->addColumn('feature_id', 'biginteger', ['signed' => false])
            ->addColumn('included_amount', 'decimal', ['precision' => 12, 'scale' => 4, 'null' => true])
            ->addColumn('price_per_unit', 'decimal', ['precision' => 12, 'scale' => 4, 'null' => true])
            ->addColumn('postpaid', 'boolean', ['default' => false])
            ->addColumn('reset_period', 'string', ['limit' => 20, 'null' => true])
            ->addColumn('reset_interval', 'integer', ['signed' => false, 'default' => 1])
            ->addColumn('max_overage', 'decimal', ['precision' => 12, 'scale' => 4, 'null' => true])
            ->addTimestamps()
            ->addIndex(['plan_id'])
            ->addIndex(['feature_id'])
            ->addIndex(['plan_id', 'feature_id'], [
                'unique' => true,
                'name' => 'billing_plan_features_plan_feature_unique',
            ])
            ->addForeignKey('plan_id', 'billing_plans', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->addForeignKey('feature_id', 'billing_features', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
            ])
            ->create();
    }
}
