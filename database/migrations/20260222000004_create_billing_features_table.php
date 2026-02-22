<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateBillingFeaturesTable extends AbstractMigration
{
    public function change(): void
    {
        $table_name = 'mkt_billing_features';
        if ($this->hasTable($table_name)) {
            return;
        }

        $this->table($table_name, ['id' => false, 'primary_key' => 'id'])
            ->addColumn('id', 'biginteger', ['identity' => true, 'signed' => false])
            ->addColumn('tenant_type', 'string', ['limit' => 100])
            ->addColumn('tenant_id', 'biginteger', ['signed' => false])
            ->addColumn('category_id', 'biginteger', ['signed' => false, 'null' => true])
            ->addColumn('slug', 'string', ['limit' => 100])
            ->addColumn('name', 'string', ['limit' => 255])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('type', 'string', ['limit' => 20, 'default' => 'boolean'])
            ->addColumn('unit', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('meta', 'json', ['null' => true])
            ->addTimestamps()
            ->addIndex(['tenant_type', 'tenant_id'])
            ->addIndex(['tenant_type', 'tenant_id', 'slug'], ['unique' => true, 'name' => 'mkt_billing_features_tenant_slug_unique'])
            ->addIndex(['category_id'])
            ->addForeignKey('category_id', 'mkt_billing_feature_categories', 'id', [
                'delete' => 'SET_NULL',
                'update' => 'NO_ACTION',
            ])
            ->create();
    }
}
