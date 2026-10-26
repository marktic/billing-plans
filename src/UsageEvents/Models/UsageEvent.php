<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\UsageEvents\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class UsageEvent
 * @package Marktic\BillingPlans\UsageEvents\Models
 *
 * @property int $id
 * @property string $billable_type
 * @property int $billable_id
 * @property int $feature_id
 * @property string $event_type
 * @property float $quantity
 * @property string|null $reference_type
 * @property string|null $reference_id
 * @property string|null $triggered_type
 * @property string|null $triggered_id
 * @property string|null $description
 * @property array|null $meta
 * @property string $created_at
 */
class UsageEvent extends BillingPlanRecord
{
}
