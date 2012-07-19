<?php
/**
 * File containing the User Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\FieldType\User;
use eZ\Publish\Core\FieldType\Value as BaseValue,
    eZ\Publish\Core\Base\Exceptions\Logic;

/**
 * Value for User field type
 */
class Value extends BaseValue
{
    /**
     * Account key
     *
     * @var string
     */
    public $accountKey;

    /**
     * Has stored login
     *
     * @var bool
     */
    public $hasStoredLogin;

    /**
     * Contentobject id
     *
     * @var mixed
     */
    public $contentobjectId;

    /**
     * Login
     *
     * @var string
     */
    public $login;

    /**
     * Email
     *
     * @var string
     */
    public $email;

    /**
     * Password hash
     *
     * @var string
     */
    public $passwordHash;

    /**
     * Password hash type
     *
     * @var mixed
     */
    public $passwordHashType;

    /**
     * Is logged in
     *
     * @var bool
     */
    public $isLoggedIn;

    /**
     * Is enabled
     *
     * @var bool
     */
    public $isEnabled;

    /**
     * Is locked
     *
     * @var bool
     */
    public $isLocked;

    /**
     * Last visit timestamp
     *
     * @var int
     */
    public $lastVisit;

    /**
     * Login count
     *
     * @var int
     */
    public $loginCount;

    /**
     * Max login
     *
     * @var int
     */
    public $maxLogin;

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return (string) $this->login;
    }
}

