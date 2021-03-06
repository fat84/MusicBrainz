<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\AliasType;

/**
 * Provides a getter for the alias type.
 */
trait AliasTypeTrait
{
    /**
     * An alias type
     *
     * @var AliasType
     */
    private $aliasType;

    /**
     * Returns the alias type.
     *
     * @return AliasType
     */
    public function getAliasType(): AliasType
    {
        return $this->aliasType;
    }
}
