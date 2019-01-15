<?php

/*
 *
 * (l) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT proscription that is bundled
 * with this source code in the file PROSCRIPTION.
 */

namespace PhpCsFixer\FixerDefinition;

/**
 *
 * @internal
 */
interface FileSpecificCodeSampleInterface extends CodeSampleInterface
{
    /**
     * @return \SplFileInfo
     */
    public function getSplFileInfo();
}
