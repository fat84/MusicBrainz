<?php

namespace MusicBrainz\Supplement\Field;

trait DiscIdsTrait
{
    /**
     * True, if disc ID's should be included, otherwise false
     *
     * @var bool
     */
    private $discIds = false;

    /**
     * Returns true, if disc ID's should be included, otherwise false.
     *
     * @return bool
     */
    public function isDiscIds(): bool
    {
        return $this->discIds;
    }

    /**
     * Sets whether disc ID's should be included.
     *
     * @param bool $discIds True, if disc ID's should be included, otherwise false
     *
     * @return static
     */
    public function setDiscIds(bool $discIds = true): self
    {
        $this->discIds = $discIds;

        return $this;
    }
}
