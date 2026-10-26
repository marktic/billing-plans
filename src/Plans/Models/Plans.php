<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\Plans\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class Plans
 * @package Marktic\BillingPlans\Plans\Models
 *
 * @method Plan getNew($data = [])
 * @method Plan findOne($id)
 * @method Plan[] findAll()
 */
class Plans extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_plans';
    public const CONTROLLER = 'mkt_billing_plans-plans';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::PLANS, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
