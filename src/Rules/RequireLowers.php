<?php

/*
 * This file is part of the slenderman/authentication project.
 *
 * (c) Cory Laughlin <corylcomposinger@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aesonus\RequireChars\Rules;


class RequireLowers extends RequireChars
{
    public function __construct(int $num_chars, string $chars = 'a-z')
    {
        parent::__construct($num_chars, $chars);
    }
}
