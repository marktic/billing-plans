<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\AbstractBase\Models;

use ByTIC\DataObjects\Behaviors\Timestampable\TimestampableManagerTrait;
use ByTIC\Records\Behaviors\HasForms\HasFormsRecordsTrait;
use Nip\I18n\Translatable\HasTranslations;
use Nip\Records\RecordManager;

/**
 * Class BillingPlanRecordManager
 * @package Marktic\BillingPlans\AbstractBase\Models
 */
abstract class BillingPlanRecordManager extends RecordManager
{
    use TimestampableManagerTrait;
    use HasTranslations;
    use HasFormsRecordsTrait;
    use HasDatabaseConnectionTrait;

    /**
     * @return string
     */
    public function getTranslateRoot()
    {
        return $this->getController();
    }
}
