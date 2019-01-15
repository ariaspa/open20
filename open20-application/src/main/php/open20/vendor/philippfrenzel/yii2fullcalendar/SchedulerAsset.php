<?php

namespace yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;

/**
 */

class SchedulerAsset extends AssetBundle
{
    public $sourcePath = '@bower/fullcalendar-scheduler/dist';
    
    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'scheduler.js',
    ];
    
    public $css = [
        'scheduler.css'
    ];
}
