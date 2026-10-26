<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\AbstractBase\Models;

use ByTIC\DataObjects\Behaviors\Timestampable\TimestampableTrait;
use ByTIC\Records\Behaviors\HasForms\HasFormsRecordTrait;
use Nip\Records\Record;

/**
 * Class BillingPlanRecord
 * @package Marktic\BillingPlans\AbstractBase\Models
 */
abstract class BillingPlanRecord extends Record
{
    use TimestampableTrait;
    use HasFormsRecordTrait;

    /**
     * @var string
     */
    protected static $createTimestamps = ['created_at'];

    /**
     * @var string
     */
    protected static $updateTimestamps = ['updated_at'];
}
