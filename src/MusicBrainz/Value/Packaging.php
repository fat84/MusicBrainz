<?php

namespace MusicBrainz\Value;

/**
 * A packaging
 *
 * @link https://musicbrainz.org/doc/Release/Packaging
 */
class Packaging
{
    /**
     * Jewel Case
     * The traditional CD case, made of hard, brittle plastic.
     *
     * @var string
     */
    public const JEWEL_CASE = 'Jewel Case';

    /**
     * Super Jewel Box/Case
     * Similar to the regular jewel case, but with rounded corners and a latch closing mechanism.
     *
     * @var string
     */
    public const SUPER_JEWEL_CASE = 'Super Jewel Box/Case';

    /**
     * Slim Jewel Case
     * A thinner jewel case, commonly used for CD singles.
     *
     * @var string
     */
    public const SLIM_JEWEL_CASE = 'Slim Jewel Case';

    /**
     * Digipak
     * A folded cardboard outer, typically made of coated cardboard, with a plastic tray glued into it.
     *
     * @var string
     */
    public const DIGIPAK = 'Digipak';

    /**
     * Cardboard/Paper Sleeve
     * A sleeve, made of paper or cardboard. Traditional packaging for records, also seen with CDs.
     *
     * @var string
     */
    public const CARDBOARD = 'Cardboard/Paper Sleeve';

    /**
     * Keep Case
     * The traditional DVD case, made of soft plastic (usually) dark grey with a thin transparent plastic cover
     * protecting the artwork.
     *
     * @var string
     */
    public const KEEP_CASE = 'Keep Case';

    /**
     * Cassette Case
     * Regular plastic case as for a cassette.
     *
     * @var string
     */
    public const CASSETTE_CASE = 'Cassette Case';

    /**
     * Book
     * A book with a sleeve containing a medium (usually a CD).
     *
     * @var string
     */
    public const BOOK = 'Book';

    /**
     * Fatbox
     * A double-sided, double-width jewel case capable of holding up to 4 CDs.
     *
     * @var string
     */
    public const FATBOX = 'Fatbox';

    /**
     * Snap Case
     * A digipak-like case held together with a "snapping" plastic closure.
     *
     * @var string
     */
    public const SNAP_CASE = 'Snap Case';

    /**
     * Gatefold Cover
     * A cardboard sleeve that folds in halves, thirds, etc. It can hold multiple records or CDs as well as booklets,
     * posters and other memorabilia.
     *
     * @var string
     */
    public const GATEFOLD_COVER = 'Gatefold Cover';

    /**
     * Discbox Slider
     * A pouch-like package with an internal mechanism that pushes the contents (usually a CD) out of the case when the
     * lid flap is opened.
     *
     * @var string
     */
    public const DISCBOX_SLIDER = 'Discbox Slider';

    /**
     * None
     * No packaging at all. Common for digital media (downloads).
     *
     * @var string
     */
    public const NONE = 'None';

    /**
     * Undefined packaging
     *
     * @var string
     */
    public const UNDEFINED = '';

    /**
     * A list of valid packaging codes
     *
     * @var array
     */
    public const PACKAGINGS = [
        self::JEWEL_CASE,
        self::SUPER_JEWEL_CASE,
        self::SLIM_JEWEL_CASE,
        self::DIGIPAK,
        self::CARDBOARD,
        self::KEEP_CASE,
        self::CASSETTE_CASE,
        self::BOOK,
        self::FATBOX,
        self::SNAP_CASE,
        self::GATEFOLD_COVER,
        self::DISCBOX_SLIDER,
        self::NONE
    ];

    /**
     * The packaging code
     *
     * @var string
     */
    private $packagingCode;

    /**
     * Constructs a packaging.
     *
     * @param string $packagingCode The packaging code
     */
    public function __construct(string $packagingCode = self::UNDEFINED)
    {
        $this->packagingCode = (in_array($packagingCode, self::PACKAGINGS))
            ? $packagingCode
            : self::UNDEFINED;
    }

    /**
     * Returns the packaging code.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (self::UNDEFINED === $this->packagingCode)
            ? $this->packagingCode
            : '';
    }
}
