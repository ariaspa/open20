<?php
/**
 */

namespace yii\rbac;

use Yii;
use yii\base\Object;

/**
 * Assignment represents an assignment of a role to a user.
 *
 * For more details and usage information on Assignment, see the [guide article on security authorization](guide:security-authorization).
 *
 * @since 2.0
 */
class Assignment extends Object
{
    /**
     * @var string|int user ID (see [[\yii\web\User::id]])
     */
    public $userId;
    /**
     * @var string the role name
     */
    public $roleName;
    /**
     * @var int UNIX timestamp representing the assignment creation time
     */
    public $createdAt;
}
