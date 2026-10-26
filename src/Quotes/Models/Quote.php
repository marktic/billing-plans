<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\Quotes\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class Quote
 * @package Marktic\BillingPlans\Quotes\Models
 *
 * @property int $id
 * @property string $billable_type
 * @property int $billable_id
 * @property string $status
 * @property string $currency
 * @property string $period_start
 * @property string $period_end
 * @property int $subtotal
 * @property int $discount_amount
 * @property float $tax_rate
 * @property int $tax_amount
 * @property int $total
 * @property array|null $meta
 * @property string $created_at
 */
class Quote extends BillingPlanRecord
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->currency . ' ' . number_format($this->total / 100, 2);
    }
}
