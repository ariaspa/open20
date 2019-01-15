<?php

/*
 * (l) 2004-2009 Chris Corbyn
 *
 */

/**
 * Wraps a standard PHP array in an iterator.
 *
 */
class Swift_Mailer_ArrayRecipientIterator implements Swift_Mailer_RecipientIterator
{
    /**
     * The list of recipients.
     *
     * @var array
     */
    private $recipients = array();

    /**
     * Create a new ArrayRecipientIterator from $recipients.
     *
     * @param array $recipients
     */
    public function __construct(array $recipients)
    {
        $this->recipients = $recipients;
    }

    /**
     * Returns true only if there are more recipients to send to.
     *
     * @return bool
     */
    public function hasNext()
    {
        return !empty($this->recipients);
    }

    /**
     * Returns an array where the keys are the addresses of recipients and the
     * values are the names. e.g. ('foo@bar' => 'Foo') or ('foo@bar' => NULL).
     *
     * @return array
     */
    public function nextRecipient()
    {
        return array_splice($this->recipients, 0, 1);
    }
}
