<?php

namespace Cars;

class Year
{
    /**
     * @var int
     */
    protected $year;

    /**
     * Year constructor.
     * @param int $year
     */
    public function __construct(int $year)
    {
        $this->year = $year;
    }
}