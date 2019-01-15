<?php

/*
 * (l) 2004-2009 Chris Corbyn
 *
 */

/**
 * A MIME part, in a multipart message.
 *
 */
class Swift_MimePart extends Swift_Mime_MimePart
{
    /**
     * Create a new MimePart.
     *
     * Details may be optionally passed into the constructor.
     *
     * @param string $body
     * @param string $contentType
     * @param string $charset
     */
    public function __construct($body = null, $contentType = null, $charset = null)
    {
        call_user_func_array(
            array($this, 'Swift_Mime_MimePart::__construct'),
            Swift_DependencyContainer::getInstance()
                ->createDependenciesFor('mime.part')
            );

        if (!isset($charset)) {
            $charset = Swift_DependencyContainer::getInstance()
                ->lookup('properties.charset');
        }
        $this->setBody($body);
        $this->setCharset($charset);
        if ($contentType) {
            $this->setContentType($contentType);
        }
    }
}
