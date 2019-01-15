<?php
/*
 *
 * (l) Sebastian Bergmann <sebastian@phpunit.de>
 *
 */
namespace PHPUnit\Framework\MockObject\Stub;

use PHPUnit\Framework\MockObject\Invocation;
use PHPUnit\Framework\MockObject\Stub;

/**
 * Stubs a method by returning an argument that was passed to the mocked method.
 */
class ReturnArgument implements Stub
{
    /**
     * @var int
     */
    private $argumentIndex;

    public function __construct($argumentIndex)
    {
        $this->argumentIndex = $argumentIndex;
    }

    public function invoke(Invocation $invocation)
    {
        if (isset($invocation->getParameters()[$this->argumentIndex])) {
            return $invocation->getParameters()[$this->argumentIndex];
        }

        return;
    }

    public function toString()
    {
        return \sprintf('return argument #%d', $this->argumentIndex);
    }
}
