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


class RequireSymbols extends RequireChars
{
    /**
     * Non-escaped character set
     * @var type 
     */
    public $rawChars;
    
    public function __construct(int $num_chars, string $chars)
    {
        $this->rawChars = $chars;
        $chars = preg_quote($chars);
        parent::__construct($num_chars, $chars);
    }
}
