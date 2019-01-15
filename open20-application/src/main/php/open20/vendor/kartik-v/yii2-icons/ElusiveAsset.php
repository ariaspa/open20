<?php

/**
 * @package yii2-icons
 * @version 1.4.4
 */

namespace kartik\icons;

use kartik\base\BaseAssetBundle;

/**
 * Asset bundle for Elusive icon set. Uses client assets (CSS, images, and fonts) from Elusive Icons repository.
 * 
 *
 * @since 1.0
 */
class ElusiveAsset extends BaseAssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/lib/elusive');
        $this->setupAssets('css', ['css/elusive-icons']);
        parent::init();
    }
}