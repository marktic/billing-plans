<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\FeatureCategories\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class FeatureCategory
 * @package Marktic\BillingPlans\FeatureCategories\Models
 *
 * @property int $id
 * @property string $tenant_type
 * @property int $tenant_id
 * @property string $slug
 * @property string $name
 * @property string|null $description
 * @property int $order
 * @property string $created_at
 * @property string $updated_at
 */
class FeatureCategory extends BillingPlanRecord
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name ?? '';
    }
}
