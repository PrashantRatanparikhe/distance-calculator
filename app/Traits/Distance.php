<?php

namespace App\Traits;

use App\Services\DistanceCalculator;

trait Distance
{
    /** @var DistanceCalculator */
    private static $distanceCalculator;

    public function __construct()
    {
        $this->bootDistanceTrait();
    }

    /**
     * Boot distance trait
     * 
     * @return void
     */
    public function bootDistanceTrait(): void
    {
        self::$distanceCalculator = new DistanceCalculator();
    }

    /**
     * Get Hammig Distance for given strings
     * @param string $first
     * @param string $second
     * 
     * @return int
     */
    public static function GetHammingDistance(string $first, string $second): int
    {
        return self::$distanceCalculator->calculateHammingDistance($first, $second);
    }

    /**
     * Get Levenshtein Distance for given strings
     * @param string $first
     * @param string $second
     * 
     * @return int
     */
    public static function GetLevenshteinDistance(string $first, string $second): int
    {
        return self::$distanceCalculator->calculateLevenshteinDistance($first, $second);
    }
}