<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\Plans\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class Plan
 * @package Marktic\BillingPlans\Plans\Models
 *
 * @property int $id
 * @property string $tenant_type
 * @property int $tenant_id
 * @property string $slug
 * @property string $name
 * @property string|null $description
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Plan extends BillingPlanRecord
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name ?? '';
    }
}
