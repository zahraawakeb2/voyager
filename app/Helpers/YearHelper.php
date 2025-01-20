<?php

namespace App\Helpers;

class YearHelper
{
    public static function getYearRange($startYear = 1950)
    {
        $currentYear = now()->year;
        $years = [];

        for ($year = $startYear; $year <= $currentYear + 1; $year++) {
            $years[$year] = $year;
        }

        return $years;
    }
}

