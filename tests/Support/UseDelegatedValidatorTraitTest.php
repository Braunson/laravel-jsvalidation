<?php
/**
 * Created by PhpStorm.
 * User: Albert
 * Date: 25/12/2015
 * Time: 4:46
 */

namespace Proengsoft\JsValidation\Support;


class UseDelegatedValidatorTraitTest extends \PHPUnit_Framework_TestCase
{

    public function testGetterAndSetter()
    {
        $mockTrait = $this->getMockForTrait('Proengsoft\JsValidation\Support\UseDelegatedValidatorTrait');
        $mockDelegated = $this->getMockBuilder('Proengsoft\JsValidation\Support\DelegatedValidator')
            ->disableOriginalConstructor()
            ->getMock();

        $mockTrait->setDelegatedValidator($mockDelegated);
        $value = $mockTrait->getDelegatedValidator($mockDelegated);

        $this->assertEquals($mockDelegated, $value);
    }

}
