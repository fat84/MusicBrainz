<?php

namespace MusicBrainz\Filter\Property;

use MusicBrainz\Value\LabelCode;

/**
 * Provides accessors for the Label Code.
 */
trait LabelCodeTrait
{
    /**
     * The Label Code
     *
     * @var null|LabelCode
     */
    private $labelCode;

    /**
     * Returns the Label Code.
     *
     * @return null|LabelCode
     */
    public function getLabelCode(): ?LabelCode
    {
        return $this->labelCode;
    }

    /**
     * Sets the Label Code.
     *
     * @param null|LabelCode $labelCode The Label Code
     *
     * @return self
     */
    public function setLabelCode(?LabelCode $labelCode): self
    {
        $this->labelCode = $labelCode;

        return $this;
    }
}
