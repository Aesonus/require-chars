<?php
/*
 * Copyright (c)2018 Cory Laughlin
 * All rights reserved. See copyright notice in LICENSE.
 */

namespace Slenderman\Tests;

use Aesonus\RequireChars\{
    Rules\RequireUppers,
    Exceptions\RequireUppersException
};

/**
 * Tests the validation rule
 *
 * @author Aesonus <corylcomposinger at gmail.com>
 */
class RequireUppersTest extends \Aesonus\TestLib\BaseTestCase
{
    /**
     *
     * @var RequireUppers 
     */
    public $rule;
        
    protected function setUp()
    {
        parent::setUp();
    }
    
    /**
     * @test
     * @group requireCharsTest
     * @dataProvider validInputDataProvider
     */
    public function validInputReturnsTrue($num_chars, $input)
    {
        $this->rule = new RequireUppers($num_chars);
        $this->assertTrue($this->rule->validate($input));
    }
    
    /**
     * @test
     * @group requireCharsTest
     * @dataProvider invalidInputDataProvider
     */
    public function invalidInputReturnsFalse($num_chars, $invalid_input)
    {
        $this->rule = new RequireUppers($num_chars);
        $this->assertFalse($this->rule->validate($invalid_input));
    }
    
    /**
     * @test
     * @group requireCharsTest
     * @dataProvider invalidInputDataProvider
     */
    public function assertInvalidInputThrowsException($num_chars, $invalid_input)
    {
        $this->rule = new RequireUppers($num_chars);
        $this->expectException(RequireUppersException::class);
        $this->expectExceptionMessage("must contain at least $num_chars uppercase letter(s)");
        $this->rule->assert($invalid_input);
    }
    
    /**
     * Data Provider
     */
    public function validInputDataProvider()
    {
        return [
            [0, 'tyrue5^'],
            [1, 'qQ1!5'],
            [1, 'qQ1Y!5'],
            [2, 'qRtQ31!&5'],
        ];
    }
    
    /**
     * Data Provider
     */
    public function invalidInputDataProvider()
    {
        return [
            [1, 'aq4w'],
            [1, 'e3r'],
            [2, 'Qq13'],
            [3, '"rtTYr5']
        ];
    }
}
