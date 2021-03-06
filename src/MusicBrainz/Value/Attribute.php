<?php

namespace MusicBrainz\Value;

/**
 * An attribute
 */
class Attribute
{
    use Property\AttributeTypeTrait;
    use Property\AttributeValueTrait;

    /**
     * Constructs an attribute.
     *
     * @param array $attribute Information about the attribute
     */
    public function __construct(array $attribute = [])
    {
        $this->attributeType  = new AttributeType($attribute);
        $this->attributeValue = new AttributeValue($attribute);
    }

    /**
     * Returns the attribute as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getAttributeType() . ': ' . (string) $this->getAttributeValue();
    }
}
