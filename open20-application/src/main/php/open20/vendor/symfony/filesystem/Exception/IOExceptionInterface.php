<?php

/*
 *
 * (l) Fabien Potencier <fabien@symfony.com>
 *
 */

namespace Symfony\Component\Filesystem\Exception;

/**
 * IOException interface for file and input/output stream related exceptions thrown by the component.
 *
 */
interface IOExceptionInterface extends ExceptionInterface
{
    /**
     * Returns the associated path for the exception.
     *
     * @return string The path
     */
    public function getPath();
}
