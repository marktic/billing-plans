<?php

namespace Marktic\BillingPlans\Bundle\Modules\Admin\Controllers;

use Marktic\BillingPlans\Utility\ViewHelper;

trait AbstractBillingPlansControllerTrait
{
    protected function bootAbstractBillingPlansControllerTrait(): void
    {
        $this->after(
            function () {
                $this->registerBillingPlansViewPaths();
            }
        );
    }

    protected function registerBillingPlansViewPaths(): void
    {
        $view = $this->getView();
        ViewHelper::registerAdminPaths($view);
    }
}
