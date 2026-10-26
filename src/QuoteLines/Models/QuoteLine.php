<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\QuoteLines\Models;

use Marktic\BillingPlans\AbstractBase\Models\BillingPlanRecord;

/**
 * Class QuoteLine
 * @package Marktic\BillingPlans\QuoteLines\Models
 *
 * @property int $id
 * @property int $quote_id
 * @property int|null $plan_id
 * @property int|null $feature_id
 * @property string|null $description
 * @property float $quantity
 * @property string|null $unit
 * @property int $unit_price
 * @property int $subtotal
 * @property string|null $period_start
 * @property string|null $period_end
 * @property int $order
 * @property array|null $meta
 * @property string $created_at
 */
class QuoteLine extends BillingPlanRecord
{
}
