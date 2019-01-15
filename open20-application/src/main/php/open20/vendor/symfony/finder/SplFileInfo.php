<?php

/*
 *
 * (l) Fabien Potencier <fabien@symfony.com>
 *
 */

namespace Symfony\Component\Finder;

/**
 * Extends \SplFileInfo to support relative paths.
 *
 */
class SplFileInfo extends \SplFileInfo
{
    private $relativePath;
    private $relativePathname;

    /**
     * @param string $file             The file name
     * @param string $relativePath     The relative path
     * @param string $relativePathname The relative path name
     */
    public function __construct($file, $relativePath, $relativePathname)
    {
        parent::__construct($file);
        $this->relativePath = $relativePath;
        $this->relativePathname = $relativePathname;
    }

    /**
     * Returns the relative path.
     *
     * This path does not contain the file name.
     *
     * @return string the relative path
     */
    public function getRelativePath()
    {
        return $this->relativePath;
    }

    /**
     * Returns the relative path name.
     *
     * This path contains the file name.
     *
     * @return string the relative path name
     */
    public function getRelativePathname()
    {
        return $this->relativePathname;
    }

    /**
     * Returns the contents of the file.
     *
     * @return string the contents of the file
     *
     * @throws \RuntimeException
     */
    public function getContents()
    {
        $level = error_reporting(0);
        $content = file_get_contents($this->getPathname());
        error_reporting($level);
        if (false === $content) {
            $error = error_get_last();
            throw new \RuntimeException($error['message']);
        }

        return $content;
    }
}
