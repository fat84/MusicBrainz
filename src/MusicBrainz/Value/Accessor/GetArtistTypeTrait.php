<?php

namespace MusicBrainz\Value\Accessor;

use MusicBrainz\Value\ArtistType;

/**
 * Provides a getter for the artist type.
 */
trait GetArtistTypeTrait
{
    /**
     * The type is used to state whether an artist is a person, a group, or something else.
     *
     * @var ArtistType
     */
    private $artistType;

    /**
     * Returns the artist type.
     *
     * @return ArtistType
     */
    public function getArtistType(): ArtistType
    {
        return $this->artistType;
    }
}
