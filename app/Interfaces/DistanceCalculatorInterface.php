<?php

namespace App\Interfaces;

interface DistanceCalculatorInterface
{
    /**
     * Calculate Hamming Distance between given strings
     * @param string $first
     * @param string $second
     * 
     * @return int
     */
    public function calculateHammingDistance(string $first, string $second): int;

    /**
     * Calculate Levenshtein Distance between given strings
     * @param string $first
     * @param string $second
     * 
     * @return int
     */
    public function calculateLevenshteinDistance(string $first, string $second): int;
}