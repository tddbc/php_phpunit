<?php
namespace Tddbc;

use Tddbc\Example;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Example
     */
    private $sut;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->sut = new Example();
    }

    /**
     * @test
     */
    public function say()
    {
        $this->assertEquals('hello TDDBC', $this->sut->say('TDDBC'));
    }
}
