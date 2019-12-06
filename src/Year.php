<?php

namespace Cars;

use Exception;

class Year
{
    /**
     * @var int
     */
    protected $year;

    /**
     * Year constructor.
     * @param int $year
     * @throws Exception
     */
    public function __construct(int $year)
    {
        $this->validateYear($year);

        $this->year = $year;
    }

    /**
     * Validates input year
     *
     * @param int $year
     * @throws Exception
     */
    protected function validateYear(int $year)
    {
        if (!is_int($year) || !($year >= 1900) || !($year <= date("Y"))) {
            throw new Exception('Year should be a int number greater than 1900 and lesser or equal than current year');
        }
    }
}