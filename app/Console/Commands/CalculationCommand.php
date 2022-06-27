<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Codifun\Distance\Helpers\Distance as DistanceHelper;

class CalculationCommand extends Command
{
    use DistanceHelper;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:calculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will get you the Hamming & Levenshtein Distance between two given strings.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->bootDistanceTrait();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        /** Asking for the input strings */
        $stringOne = (string)$this->ask("Input first string");
        $stringTwo = (string)$this->ask("Input second string");

        /** Show error if given strings is empty */
        if (empty($stringOne) || empty($stringTwo)) {
            $this->error("Validation Error: Both the strings are required.");
            return 0;
        }

        /** Calculating distance */
        $hammingDistance = self::GetHammingDistance($stringOne, $stringTwo);
        $levenshteinDistance = self::GetLevenshteinDistance($stringOne, $stringTwo);

        /** Print the result */
        $this->info("Hamming distance between both the strings is: {$hammingDistance}");
        $this->info("Levenshtein distance between both the strings is: {$levenshteinDistance}");
        return 0;
    }
}
