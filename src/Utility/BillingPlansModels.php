<?php

declare(strict_types=1);

namespace Marktic\BillingPlans\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\BillingPlans\BillingPlansServiceProvider;
use Marktic\BillingPlans\FeatureCategories\Models\FeatureCategories;
use Marktic\BillingPlans\Features\Models\Features;
use Marktic\BillingPlans\PlanFeatures\Models\PlanFeatures;
use Marktic\BillingPlans\PlanPrices\Models\PlanPrices;
use Marktic\BillingPlans\Plans\Models\Plans;
use Marktic\BillingPlans\QuoteLines\Models\QuoteLines;
use Marktic\BillingPlans\Quotes\Models\Quotes;
use Marktic\BillingPlans\UsageEvents\Models\UsageEvents;
use Marktic\BillingPlans\UsageMeters\Models\UsageMeters;
use Nip\Records\RecordManager;

/**
 * Class BillingPlansModels
 * @package Marktic\BillingPlans\Utility
 */
class BillingPlansModels extends ModelFinder
{
    public const PLANS = 'plans';
    public const PLAN_PRICES = 'plan_prices';
    public const FEATURE_CATEGORIES = 'feature_categories';
    public const FEATURES = 'features';
    public const PLAN_FEATURES = 'plan_features';
    public const USAGE_METERS = 'usage_meters';
    public const USAGE_EVENTS = 'usage_events';
    public const QUOTES = 'quotes';
    public const QUOTE_LINES = 'quote_lines';

    public static function plans(): Plans|RecordManager
    {
        return static::getModels(self::PLANS, Plans::class);
    }

    public static function plansClass(): string
    {
        return static::getModelsClass(self::PLANS, Plans::class);
    }

    public static function planPrices(): PlanPrices|RecordManager
    {
        return static::getModels(self::PLAN_PRICES, PlanPrices::class);
    }

    public static function planPricesClass(): string
    {
        return static::getModelsClass(self::PLAN_PRICES, PlanPrices::class);
    }

    public static function featureCategories(): FeatureCategories|RecordManager
    {
        return static::getModels(self::FEATURE_CATEGORIES, FeatureCategories::class);
    }

    public static function featureCategoriesClass(): string
    {
        return static::getModelsClass(self::FEATURE_CATEGORIES, FeatureCategories::class);
    }

    public static function features(): Features|RecordManager
    {
        return static::getModels(self::FEATURES, Features::class);
    }

    public static function featuresClass(): string
    {
        return static::getModelsClass(self::FEATURES, Features::class);
    }

    public static function planFeatures(): PlanFeatures|RecordManager
    {
        return static::getModels(self::PLAN_FEATURES, PlanFeatures::class);
    }

    public static function planFeaturesClass(): string
    {
        return static::getModelsClass(self::PLAN_FEATURES, PlanFeatures::class);
    }

    public static function usageMeters(): UsageMeters|RecordManager
    {
        return static::getModels(self::USAGE_METERS, UsageMeters::class);
    }

    public static function usageMetersClass(): string
    {
        return static::getModelsClass(self::USAGE_METERS, UsageMeters::class);
    }

    public static function usageEvents(): UsageEvents|RecordManager
    {
        return static::getModels(self::USAGE_EVENTS, UsageEvents::class);
    }

    public static function usageEventsClass(): string
    {
        return static::getModelsClass(self::USAGE_EVENTS, UsageEvents::class);
    }

    public static function quotes(): Quotes|RecordManager
    {
        return static::getModels(self::QUOTES, Quotes::class);
    }

    public static function quotesClass(): string
    {
        return static::getModelsClass(self::QUOTES, Quotes::class);
    }

    public static function quoteLines(): QuoteLines|RecordManager
    {
        return static::getModels(self::QUOTE_LINES, QuoteLines::class);
    }

    public static function quoteLinesClass(): string
    {
        return static::getModelsClass(self::QUOTE_LINES, QuoteLines::class);
    }

    protected static function packageName(): string
    {
        return BillingPlansServiceProvider::NAME;
    }
}
