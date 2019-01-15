<?php

/*
 * (l) 2004-2009 Chris Corbyn
 *
 */

/**
 * Interface for all Transfer Encoding schemes.
 *
 */
interface Swift_Mime_ContentEncoder extends Swift_Encoder
{
    /**
     * Encode $in to $out.
     *
     * @param Swift_OutputByteStream $os              to read from
     * @param Swift_InputByteStream  $is              to write to
     * @param int                    $firstLineOffset
     * @param int                    $maxLineLength   - 0 indicates the default length for this encoding
     */
    public function encodeByteStream(Swift_OutputByteStream $os, Swift_InputByteStream $is, $firstLineOffset = 0, $maxLineLength = 0);

    /**
     * Get the MIME name of this content encoding scheme.
     *
     * @return string
     */
    public function getName();
}
