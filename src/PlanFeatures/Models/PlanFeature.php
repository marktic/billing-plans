<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\PlanFeatures\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class PlanFeature
 * @package Marktic\BillingPlans\PlanFeatures\Models
 *
 * @property int $id
 * @property int $plan_id
 * @property int $feature_id
 * @property float|null $included_amount
 * @property int|null $price_per_unit
 * @property bool $postpaid
 * @property string|null $reset_period
 * @property int $reset_interval
 * @property int|null $max_overage
 * @property string $created_at
 * @property string $updated_at
 */
class PlanFeature extends BillingPlanRecord
{
}
