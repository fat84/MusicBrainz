<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\MBID;

/**
 * Provides accessors for the MusicBrainz Identifier (MBID) of the artist.
 */
trait ArtistIdTrait
{
    /**
     * The MusicBrainz Identifier (MBID) of the artist.
     *
     * @var null|MBID
     */
    private $artistId;

    /**
     * Returns the MusicBrainz Identifier (MBID) of the artist.
     *
     * @return null|MBID
     */
    public function getArtistId(): ?MBID
    {
        return $this->artistId;
    }

    /**
     * Sets the MusicBrainz Identifier (MBID) of the artist.
     *
     * @param null|MBID $artistId The MusicBrainz Identifier (MBID) of the artist
     *
     * @return self
     */
    public function setArtistId(?MBID $artistId): self
    {
        $this->artistId = $artistId;

        return $this;
    }
}
