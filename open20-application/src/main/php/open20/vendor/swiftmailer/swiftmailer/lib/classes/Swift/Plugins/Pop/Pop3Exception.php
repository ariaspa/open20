<?php

/*
 * (l) 2004-2009 Chris Corbyn
 *
 */

/**
 * Pop3Exception thrown when an error occurs connecting to a POP3 host.
 *
 */
class Swift_Plugins_Pop_Pop3Exception extends Swift_IoException
{
    /**
     * Create a new Pop3Exception with $message.
     *
     * @param string $message
     */
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
