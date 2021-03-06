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


class RequireSymbolsException extends RequireCharsException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must contain at least {{numChars}} '
        . 'symbol(s) consisting of only {{rawChars}}',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not contain at least {{numChars}} '
        . 'symbol(s) consisting of only {{rawChars}}',
        ],
    ];
}
