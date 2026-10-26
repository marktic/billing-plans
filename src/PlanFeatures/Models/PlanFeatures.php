<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\PlanFeatures\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class PlanFeatures
 * @package Marktic\BillingPlans\PlanFeatures\Models
 *
 * @method PlanFeature getNew($data = [])
 * @method PlanFeature findOne($id)
 * @method PlanFeature[] findAll()
 */
class PlanFeatures extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_plan_features';
    public const CONTROLLER = 'mkt_billing_plans-plan_features';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::PLAN_FEATURES, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
