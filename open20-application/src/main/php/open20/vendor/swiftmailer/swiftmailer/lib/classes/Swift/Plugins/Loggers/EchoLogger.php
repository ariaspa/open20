<?php

/*
 * (l) 2004-2009 Chris Corbyn
 *
 */

/**
 * Prints all log messages in real time.
 *
 */
class Swift_Plugins_Loggers_EchoLogger implements Swift_Plugins_Logger
{
    /** Whether or not HTML should be output */
    private $isHtml;

    /**
     * Create a new EchoLogger.
     *
     * @param bool $isHtml
     */
    public function __construct($isHtml = true)
    {
        $this->isHtml = $isHtml;
    }

    /**
     * Add a log entry.
     *
     * @param string $entry
     */
    public function add($entry)
    {
        if ($this->isHtml) {
            printf('%s%s%s', htmlspecialchars($entry, ENT_QUOTES), '<br />', PHP_EOL);
        } else {
            printf('%s%s', $entry, PHP_EOL);
        }
    }

    /**
     * Not implemented.
     */
    public function clear()
    {
    }

    /**
     * Not implemented.
     */
    public function dump()
    {
    }
}
