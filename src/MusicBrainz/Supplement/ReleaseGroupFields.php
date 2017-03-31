<?php

namespace MusicBrainz\Supplement;

class ReleaseGroupFields
{
    use Field\ArtistsTrait;
    use Field\ReleasesTrait;
    use Field\DiscIdsTrait;
    use Field\MediaTrait;
    use Field\ArtistCreditsTrait;
    use Field\TagsTrait;
    use Field\UserTagsTrait;
    use Field\RatingsTrait;
    use Field\UserRatingsTrait;
    use Field\ArtistRelationsTrait;
    use Field\LabelRelationsTrait;
    use Field\RecordingRelationsTrait;
    use Field\ReleaseRelationsTrait;
    use Field\ReleaseGroupRelationsTrait;
    use Field\URLRelationsTrait;
    use Field\WorkLevelRelationsTrait;
    use Field\AnnotationTrait;
    use Field\AliasesTrait;
}