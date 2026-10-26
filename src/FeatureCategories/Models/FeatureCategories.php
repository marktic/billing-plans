<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\FeatureCategories\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecordManager;
use Marktic\BillingPlans\Utility\BillingPlansModels;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class FeatureCategories
 * @package Marktic\BillingPlans\FeatureCategories\Models
 *
 * @method FeatureCategory getNew($data = [])
 * @method FeatureCategory findOne($id)
 * @method FeatureCategory[] findAll()
 */
class FeatureCategories extends BillingPlanRecordManager
{
    public const TABLE = 'mkt_billing_feature_categories';
    public const CONTROLLER = 'mkt_billing_plans-feature_categories';

    protected function generateTable(): string
    {
        return PackageConfig::tableName(BillingPlansModels::FEATURE_CATEGORIES, self::TABLE);
    }

    protected function generateController(): string
    {
        return self::CONTROLLER;
    }
}
