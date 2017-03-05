<?php

namespace MusicBrainz;

/**
 * A gender
 */
class Gender
{
    /**
     * Male
     *
     * @var string
     */
    public const MALE = 'male';

    /**
     * Female
     *
     * @var string
     */
    public const FEMALE = 'female';

    /**
     * Neither male nor female
     *
     * @var string
     */
    public const OTHER = 'other';

    /**
     * Undefined gender
     *
     * @var string
     */
    public const UNDEFINED = '';

    /**
     * A list of valid gender codes
     *
     * @var array
     */
    public const GENDERS = [
        self::MALE,
        self::FEMALE,
        self::OTHER,
        self::UNDEFINED
    ];

    /**
     * The gender code
     *
     * @var string
     */
    private $genderCode;

    /**
     * Constructs a gender.
     *
     * @param string $genderCode The gender
     */
    public function __construct(string $genderCode)
    {
        $this->gender = (in_array($genderCode, self::GENDERS))
            ? $genderCode
            : self::OTHER;
    }

    /**
     * Returns the gender code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->genderCode;
    }
}
