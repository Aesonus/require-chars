<?php
/*
 * This file is part of the aesonus/require-chars project.
 *
 * (c) Cory Laughlin <corylcomposinger@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aesonus\RequireChars\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

class RequireCharsException extends ValidationException
{

    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must contain at least {{numChars}} '
        . 'character(s) consisting of only {{chars}}',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not contain at least {{numChars}} '
        . 'character(s) consisting of only {{chars}}',
        ],
    ];

}
