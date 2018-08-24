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

use Respect\Validation\Rules\AbstractRule;

class RequireChars extends AbstractRule
{
    /**
     * Number of characters required in no particular order
     * @var string 
     */
    public $numChars = 1;
    
    /**
     * Allowed characters for this rule
     * @var string 
     */
    public $chars = '';
    
    protected $pattern;
    
    /**
     * 
     * @param int $num_chars
     * @param string $chars String used in a 
     */
    public function __construct(
        int $num_chars,
        string $chars)
    {
        $this->numChars = $num_chars;
        $this->chars = $chars;
        
        $this->pattern = "/[$chars]+?/";
    }

    public function validate($input)
    {
        if (!is_string($input)) {
            return false;
        }
        return preg_match_all($this->pattern, (string) $input) >= $this->numChars;
    }
}
