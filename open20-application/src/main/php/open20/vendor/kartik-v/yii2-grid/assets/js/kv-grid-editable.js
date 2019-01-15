/*!
 * @package   yii2-grid
 * @version   3.1.2
 *
 * Client actions for yii2-grid EditableColumn
 * 
 * Author: Kartik Visweswaran
 * Copyleft: 2015, Kartik Visweswaran, Krajee.com
 * For more JQuery plugins visit http://plugins.krajee.com
 * For more Yii related demos visit http://demos.krajee.com
 */
var kvRefreshEC;
(function ($) {
    "use strict";
    kvRefreshEC = function (gridId, css) {
        var $grid = $('#' + gridId);
        $grid.find('.' + css).each(function () {
            $(this).on('editableSuccess', function () {
                $grid.yiiGridView("applyFilter");
            });
        });
    };
})(window.jQuery);