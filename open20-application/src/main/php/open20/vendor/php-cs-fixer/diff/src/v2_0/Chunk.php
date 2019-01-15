<?php
/*
 *
 * (l) Sebastian Bergmann <sebastian@phpunit.de>
 *
 */

namespace PhpCsFixer\Diff\v2_0;

final class Chunk
{
    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $startRange;

    /**
     * @var int
     */
    private $end;

    /**
     * @var int
     */
    private $endRange;

    /**
     * @var array
     */
    private $lines;

    public function __construct($start = 0, $startRange = 1, $end = 0, $endRange = 1, array $lines = [])
    {
        $this->start      = $start;
        $this->startRange = $startRange;
        $this->end        = $end;
        $this->endRange   = $endRange;
        $this->lines      = $lines;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getStartRange()
    {
        return $this->startRange;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function getEndRange()
    {
        return $this->endRange;
    }

    public function getLines()
    {
        return $this->lines;
    }

    public function setLines(array $lines)
    {
        $this->lines = $lines;
    }
}
