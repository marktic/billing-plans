<?php

declare(strict_types=1);

namespace Marktic\BillingPlans;

use Bytic\PackageBase\BaseServiceProvider;

class BillingPlansServiceProvider extends BaseServiceProvider
{
    protected $packageName = 'billing-plans';

    protected $packageNamespace = 'BillingPlans';

    public function boot(): void
    {
        parent::boot();
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
