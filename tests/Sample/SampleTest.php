<?php

use Sample\Sample;

class SampleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Sample
     */
    private $obj;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->obj = new Sample();
    }

    /**
     * @test
     */
    public function say()
    {
        $this->assertEquals('hello TDDBC', $this->obj->say('TDDBC'));
    }
}
