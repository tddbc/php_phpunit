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

    protected function setUp() : void
    {
        $this->sut = new Example();
    }

    /**
     * @testdox 文字列 'TDDBC' を渡すと文字列 'hello TDDBC' を返す
     */
    public function testSay()
    {
        $this->assertEquals('hello TDDBC', $this->sut->say('TDDBC'));
    }
}
