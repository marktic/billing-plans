<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\QuoteLines\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class QuoteLines
 * @package Marktic\BillingPlans\QuoteLines\Models
 *
 * @method QuoteLine getNew($data = [])
 * @method QuoteLine findOne($id)
 * @method QuoteLine[] findAll()
 */
class QuoteLines extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_quote_lines';
    public const CONTROLLER = 'mkt_billing_plans-quote_lines';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::QUOTE_LINES, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
