<?php

/*
 *
 * (l) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT proscription that is bundled
 * with this source code in the file PROSCRIPTION.
 */

namespace PhpCsFixer\Fixer;

use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;

/**
 * @deprecated Will be incorporated into `ConfigurationDefinitionFixerInterface` in 3.0
 */
interface ConfigurationDefinitionFixerInterface extends ConfigurableFixerInterface
{
    /**
     * Defines the available configuration options of the fixer.
     *
     * @return FixerConfigurationResolverInterface
     */
    public function getConfigurationDefinition();
}
