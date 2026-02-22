<?php

use Marktic\BillingPlans\FeatureCategories\Models\FeatureCategories;
use Marktic\BillingPlans\Features\Models\Features;
use Marktic\BillingPlans\PlanFeatures\Models\PlanFeatures;
use Marktic\BillingPlans\PlanPrices\Models\PlanPrices;
use Marktic\BillingPlans\Plans\Models\Plans;
use Marktic\BillingPlans\QuoteLines\Models\QuoteLines;
use Marktic\BillingPlans\Quotes\Models\Quotes;
use Marktic\BillingPlans\UsageEvents\Models\UsageEvents;
use Marktic\BillingPlans\UsageMeters\Models\UsageMeters;
use Marktic\BillingPlans\Utility\BillingPlansModels;

return [
    'models' => [
        BillingPlansModels::PLANS => Plans::class,
        BillingPlansModels::PLAN_PRICES => PlanPrices::class,
        BillingPlansModels::FEATURE_CATEGORIES => FeatureCategories::class,
        BillingPlansModels::FEATURES => Features::class,
        BillingPlansModels::PLAN_FEATURES => PlanFeatures::class,
        BillingPlansModels::USAGE_METERS => UsageMeters::class,
        BillingPlansModels::USAGE_EVENTS => UsageEvents::class,
        BillingPlansModels::QUOTES => Quotes::class,
        BillingPlansModels::QUOTE_LINES => QuoteLines::class,
    ],
    'tables' => [
        BillingPlansModels::PLANS => Plans::TABLE,
        BillingPlansModels::PLAN_PRICES => PlanPrices::TABLE,
        BillingPlansModels::FEATURE_CATEGORIES => FeatureCategories::TABLE,
        BillingPlansModels::FEATURES => Features::TABLE,
        BillingPlansModels::PLAN_FEATURES => PlanFeatures::TABLE,
        BillingPlansModels::USAGE_METERS => UsageMeters::TABLE,
        BillingPlansModels::USAGE_EVENTS => UsageEvents::TABLE,
        BillingPlansModels::QUOTES => Quotes::TABLE,
        BillingPlansModels::QUOTE_LINES => QuoteLines::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];
