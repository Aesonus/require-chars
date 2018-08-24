<?php

/*
 * This file is part of the slenderman/authentication project.
 *
 * (c) Cory Laughlin <corylcomposinger@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aesonus\RequireChars\Exceptions;


class RequireLowersException extends RequireCharsException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must contain at least {{numChars}} '
        . 'lowercase letter(s)',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not contain at least {{numChars}} '
        . 'lowercase letter(s)',
        ],
    ];
}
