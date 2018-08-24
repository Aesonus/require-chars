<?php
/*
 * Copyright (c)2018 Cory Laughlin
 * All rights reserved. See copyright notice in LICENSE.
 */

namespace Slenderman\Tests;

use Aesonus\RequireChars\{
    Rules\RequireDigits,
    Exceptions\RequireDigitsException
};

/**
 * Tests the validation rule
 *
 * @author Aesonus <corylcomposinger at gmail.com>
 */
class RequireDigitsTest extends \Aesonus\TestLib\BaseTestCase
{
    /**
     *
     * @var RequireDigits 
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
        $this->rule = new RequireDigits($num_chars);
        $this->assertTrue($this->rule->validate($input));
    }
    
    /**
     * @test
     * @group requireCharsTest
     * @dataProvider invalidInputDataProvider
     */
    public function invalidInputReturnsFalse($num_chars, $invalid_input)
    {
        $this->rule = new RequireDigits($num_chars);
        $this->assertFalse($this->rule->validate($invalid_input));
    }
    
    /**
     * @test
     * @group requireCharsTest
     * @dataProvider invalidInputDataProvider
     */
    public function assertInvalidInputThrowsException($num_chars, $invalid_input)
    {
        $this->rule = new RequireDigits($num_chars);
        $this->expectException(RequireDigitsException::class);
        
        $this->expectExceptionMessage("must contain at least $num_chars digit(s)");
        $this->rule->assert($invalid_input);
    }
    
    /**
     * Data Provider
     */
    public function validInputDataProvider()
    {
        return [
            [0, 'tyrue^'],
            [1, 'qQ1!4'],
            [1, 'qQ1Y!5'],
            [2, 'qRtyQ31!&5'],
        ];
    }
    
    /**
     * Data Provider
     */
    public function invalidInputDataProvider()
    {
        return [
            [1, 'ABD%'],
            [1, 'gfsdg$%'],
            [2, 'Qqu3'],
            [3, '"rTYr45']
        ];
    }
}
