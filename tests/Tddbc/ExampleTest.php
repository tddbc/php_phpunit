<?php
namespace Tddbc;

use PHPUnit\Framework\TestCase;
use Tddbc\Example;

/**
 * @testdox サンプルテスト
 */
class ExampleTest extends TestCase
{
    /**
     * @var Example
     */
    protected $sut;

    /**
     * {@inheritdoc}
     */
    protected function setUp() : void
    {
        $this->sut = new Example();
    }

    /**
     * @test
     * @testdox 文字列 'TDDBC' を渡すと文字列 'hello TDDBC' を返す
     */
    public function say()
    {
        $this->assertEquals('hello TDDBC', $this->sut->say('TDDBC'));
    }
}
