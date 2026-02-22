<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\PlanPrices\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class PlanPrice
 * @package Marktic\BillingPlans\PlanPrices\Models
 *
 * @property int $id
 * @property int $plan_id
 * @property string $interval
 * @property int $interval_count
 * @property int $price
 * @property string $currency
 * @property int|null $trial_days
 * @property bool $is_default
 * @property string $created_at
 * @property string $updated_at
 */
class PlanPrice extends BillingPlanRecord
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->currency . ' ' . number_format($this->price / 100, 2) . ' / ' . $this->interval;
    }
}
