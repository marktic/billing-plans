<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\Features\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class Feature
 * @package Marktic\BillingPlans\Features\Models
 *
 * @property int $id
 * @property string $tenant_type
 * @property int $tenant_id
 * @property int|null $category_id
 * @property string $slug
 * @property string $name
 * @property string|null $description
 * @property string $type
 * @property string|null $unit
 * @property array|null $meta
 * @property string $created_at
 * @property string $updated_at
 */
class Feature extends BillingPlanRecord
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name ?? '';
    }
}
