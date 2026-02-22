<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\AbstractBase\Models;

use Marktic\BillingPlans\Utility\PackageConfig;
use Nip\Database\Connections\Connection;

use function app;

/**
 * Trait HasDatabaseConnectionTrait
 * @package Marktic\BillingPlans\AbstractBase\Models
 */
trait HasDatabaseConnectionTrait
{
    /**
     * @return Connection
     */
    protected function newDbConnection()
    {
        return app('db')->connection(PackageConfig::databaseConnection());
    }
}
