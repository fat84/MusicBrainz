<?php

namespace MusicBrainz\Value\Property;

use MusicBrainz\Value\Score;

/**
 * Provides a getter for the relevance score for the search result.
 */
trait ScoreTrait
{
    /**
     * The relevance score for the search result
     *
     * @var Score
     */
    private $score;

    /**
     * Returns the relevance score for the search result.
     *
     * @return Score
     */
    public function getScore(): Score
    {
        return $this->score;
    }
}
