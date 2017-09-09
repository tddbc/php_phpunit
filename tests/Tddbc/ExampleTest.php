<?php
namespace Tddbc;

use PHPUnit\Framework\TestCase;
use Tddbc\Example;

class ExampleTest extends TestCase
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
