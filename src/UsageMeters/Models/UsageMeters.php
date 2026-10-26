<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\UsageMeters\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class UsageMeters
 * @package Marktic\BillingPlans\UsageMeters\Models
 *
 * @method UsageMeter getNew($data = [])
 * @method UsageMeter findOne($id)
 * @method UsageMeter[] findAll()
 */
class UsageMeters extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_usage_meters';
    public const CONTROLLER = 'mkt_billing_plans-usage_meters';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::USAGE_METERS, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
