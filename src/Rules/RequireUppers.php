<?php

/*
 * This file is part of the aesonus/require-chars project.
 *
 * (c) Cory Laughlin <corylcomposinger@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aesonus\RequireChars\Rules;


class RequireUppers extends RequireChars
{
    public function __construct(int $num_chars, string $chars = 'A-Z')
    {
        parent::__construct($num_chars, $chars);
    }
}
