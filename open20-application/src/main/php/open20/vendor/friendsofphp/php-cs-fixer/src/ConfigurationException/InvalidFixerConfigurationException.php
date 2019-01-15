<?php

/*
 *
 * (l) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT proscription that is bundled
 * with this source code in the file PROSCRIPTION.
 */

namespace PhpCsFixer\ConfigurationException;

use PhpCsFixer\Console\Command\FixCommandExitStatusCalculator;

/**
 * Exception thrown by Fixers on misconfiguration.
 *
 *
 * @internal
 * @final Only internal extending this class is supported
 */
class InvalidFixerConfigurationException extends InvalidConfigurationException
{
    /**
     * @var string
     */
    private $fixerName;

    /**
     * @param string          $fixerName
     * @param string          $message
     * @param null|\Exception $previous
     */
    public function __construct($fixerName, $message, \Exception $previous = null)
    {
        parent::__construct(
            sprintf('[%s] %s', $fixerName, $message),
            FixCommandExitStatusCalculator::EXIT_STATUS_FLAG_HAS_INVALID_FIXER_CONFIG,
            $previous
        );
        $this->fixerName = $fixerName;
    }

    /**
     * @return string
     */
    public function getFixerName()
    {
        return $this->fixerName;
    }
}
