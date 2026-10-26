<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\PlanPrices\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class PlanPrices
 * @package Marktic\BillingPlans\PlanPrices\Models
 *
 * @method PlanPrice getNew($data = [])
 * @method PlanPrice findOne($id)
 * @method PlanPrice[] findAll()
 */
class PlanPrices extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_plan_prices';
    public const CONTROLLER = 'mkt_billing_plans-plan_prices';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::PLAN_PRICES, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
