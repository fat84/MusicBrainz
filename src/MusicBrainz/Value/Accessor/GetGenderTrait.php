<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\Gender;

/**
 * Provides a getter for the gender.
 */
trait GetGenderTrait
{
    /**
     * The gender is used to explicitly state whether a person or character identifies as male, female or neither.
     * Groups have an undefined gender.
     *
     * @var Gender
     */
    private $gender;

    /**
     * Returns the artist's gender.
     *
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }
}