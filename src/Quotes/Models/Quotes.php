<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\Quotes\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class Quotes
 * @package Marktic\BillingPlans\Quotes\Models
 *
 * @method Quote getNew($data = [])
 * @method Quote findOne($id)
 * @method Quote[] findAll()
 */
class Quotes extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_quotes';
    public const CONTROLLER = 'mkt_billing_plans-quotes';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::QUOTES, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
