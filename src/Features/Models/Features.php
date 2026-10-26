<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\Features\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class Features
 * @package Marktic\BillingPlans\Features\Models
 *
 * @method Feature getNew($data = [])
 * @method Feature findOne($id)
 * @method Feature[] findAll()
 */
class Features extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_features';
    public const CONTROLLER = 'mkt_billing_plans-features';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::FEATURES, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
