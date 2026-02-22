<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\UsageEvents\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class UsageEvents
 * @package Marktic\BillingPlans\UsageEvents\Models
 *
 * @method UsageEvent getNew($data = [])
 * @method UsageEvent findOne($id)
 * @method UsageEvent[] findAll()
 */
class UsageEvents extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_usage_events';
    public const CONTROLLER = 'mkt_billing_plans-usage_events';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::USAGE_EVENTS, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
