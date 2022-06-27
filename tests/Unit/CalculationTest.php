<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Codifun\Distance\Helpers\Distance as DistanceHelper;

class CalculationTest extends TestCase
{
    use DistanceHelper;

    public function __construct()
    {
        parent::__construct();
        $this->bootDistanceTrait();
    }

    /**
     * It will calculate the Hamming & Levenshtein distance
     *
     * @return void
     */
    public function test_levenshtein_distance_should_be_smaller_than_hamming_distance()
    {
        $payload = [
            "string_one" => "This is a test",
            "string_two" => "This is test"
        ];
        
        $hamming = self::GetHammingDistance($payload['string_one'], $payload['string_two']);
        $levenshtein = self::GetLevenshteinDistance($payload['string_one'], $payload['string_two']);

        // $levenshtein value shoud be less than or equal $hamming
        $this->assertTrue($levenshtein <= $hamming);
    }

    /**
     * We are calculating the Hamming distance of substitution only
     *
     * @return void
     */
    public function test_it_will_calculate_the_hamming_distance_of_substitution_only()
    {
        $payload = [
            "string_one" => "This is a test",
            "string_two" => "This is test"
        ];

        $hamming = self::GetHammingDistance($payload['string_one'], $payload['string_two']);

        /**
         * Example explained
         * 
         * substitution of "a" for "t"
         * substitution of "t" for "s"
         * substitution of "e" for "t"
         */
        $this->assertEquals(3, $hamming);

        $payload = [
            "string_one" => "This is test",
            "string_two" => "The is test"
        ];
        
        $hamming = self::GetHammingDistance($payload['string_one'], $payload['string_two']);

        /**
         * Example explained
         * 
         * substitution of "i" for "e"
         * substitution of "i" for "s"
         * substitution of "t" for "e"
         * substitution of "e" for "s"
         * substitution of "s" for "t"
         */
        $this->assertEquals(5, $hamming);
    }

    /**
     * It will calculate the levenshtein distance
     *
     * @return void
     */
    public function test_it_will_calculate_the_levenshtein_distance()
    {
        $payload = [
            "string_one" => "kitten",
            "string_two" => "sitting"
        ];

        $levenshtein = self::GetLevenshteinDistance($payload['string_one'], $payload['string_two']);

        /**
         * Example explained
         * 
         * kitten → sitten (substitution of "s" for "k")
         * sitten → sittin (substitution of "i" for "e")
         * sittin → sitting (insertion of "g" at the end)
         */
        $this->assertEquals(3, $levenshtein);

        $payload = [
            "string_one" => "HONDA",
            "string_two" => "HYUNDAI"
        ];

        $levenshtein = self::GetLevenshteinDistance($payload['string_one'], $payload['string_two']);

        /**
         * Example explained
         * 
         * HONDA → HYNDA (substitution of "O" for "Y")
         * HYNDA → HYUNDA (insertion of "U" after "HY")
         * HYUNDA → HYUNDAI (insertion of "I" at the end)
         */
        $this->assertEquals(3, $levenshtein);
    }

    /**
     * It will calculate the valid Hamming & Levenshtein distance
     *
     * @return void
     */
    public function test_it_will_calculate_the_valid_distance()
    {
        $payload = [
            "string_one" => "This is a test",
            "string_two" => "This is test"
        ];

        $hamming = self::GetHammingDistance($payload['string_one'], $payload['string_two']);
        $levenshtein = self::GetLevenshteinDistance($payload['string_one'], $payload['string_two']);

        // Hamming Distance of the given strings is 3 and the Levenshtein distance is 2 
        $this->assertEquals(3, $hamming);
        $this->assertEquals(2, $levenshtein);

        $payload = [
            "string_one" => "This is test",
            "string_two" => "The is test"
        ];
        
        $hamming = self::GetHammingDistance($payload['string_one'], $payload['string_two']);
        $levenshtein = self::GetLevenshteinDistance($payload['string_one'], $payload['string_two']);

        // Hamming Distance of the given strings is 5 and the Levenshtein distance is 2
        $this->assertEquals(5, $hamming);
        $this->assertEquals(2, $levenshtein);
    }
}
