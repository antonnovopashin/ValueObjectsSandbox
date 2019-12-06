<?php

namespace Cars;

use Exception;

class Transmission
{
    const CVT_TYPE = 'cvt';
    const AUTOMATIC_TYPE = 'automatic';
    const MANUAL_TYPE = 'manual';
    const SEMI_AUTOMATIC_TYPE = 'semi automatic';

    const VALID_TYPES = [
        self::CVT_TYPE,
        self::AUTOMATIC_TYPE,
        self::MANUAL_TYPE,
        self::SEMI_AUTOMATIC_TYPE,
    ];

    /**
     * @var string
     */
    protected $type;

    /**
     * Transmission constructor.
     * @param string $type
     * @throws Exception
     */
    public function __construct(string $type) {
        $this->validateTransmissionType($type);

        $this->type = $type;
    }

    public function getInfo()
    {
        $info = new \stdClass();

        $info->type= $this->type;

        return $info;
    }

    /**
     * Validates input year
     *
     * @param string $type
     * @throws Exception
     */
    protected function validateTransmissionType(string $type)
    {
        if (!is_string($type) || !in_array($type, self::VALID_TYPES)) {
            $typesAsString = implode(", ",self::VALID_TYPES);

            throw new Exception('Transmission type should be either ' . $typesAsString);
        }
    }
}