<?php

declare(strict_types=1);

namespace Marktic\BillingPlans;

use Bytic\PackageBase\BaseBootableServiceProvider;
use Marktic\BillingPlans\Utility\PackageConfig;

/**
 * Class BillingPlansServiceProvider
 * @package Marktic\BillingPlans
 */
class BillingPlansServiceProvider extends BaseBootableServiceProvider
{
    public const NAME = 'mkt_billing_plans';

    public function migrations(): ?string
    {
        if (PackageConfig::shouldRunMigrations()) {
            return dirname(__DIR__) . '/database/migrations/';
        }

        return null;
    }

    protected function translationsPath(): ?string
    {
        return dirname(__DIR__) . '/resources/lang';
    }
}
