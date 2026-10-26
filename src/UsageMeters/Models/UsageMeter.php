<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\UsageMeters\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class UsageMeter
 * @package Marktic\BillingPlans\UsageMeters\Models
 *
 * @property int $id
 * @property string $billable_type
 * @property int $billable_id
 * @property int $feature_id
 * @property string $period_start
 * @property string $period_end
 * @property float $used_amount
 * @property string $created_at
 * @property string $updated_at
 */
class UsageMeter extends BillingPlanRecord
{
}
