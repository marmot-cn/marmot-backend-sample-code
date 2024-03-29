<?php
namespace Common\Repository;

use Prophecy\Argument;
use PHPUnit\Framework\TestCase;

use News\Adapter\News\NewsDBAdapter;

class OperatAbleRepositoryTraitTest extends TestCase
{
    private $trait;

    public function setUp()
    {
        $this->trait = $this->getMockBuilder(MockOperatAbleRepositoryTrait::class)
                            ->setMethods(['getAdapter'])
                            ->getMock();
    }

    public function tearDown()
    {
        unset($this->trait);
    }

    public function testAdd()
    {
        $keys = array();
        $news = \News\Utils\ObjectGenerate::generateNews(1);

        $adapter = $this->prophesize(NewsDBAdapter::class);
        $adapter->add(Argument::exact($news), Argument::exact($keys))->shouldBeCalledTimes(1)->willReturn(true);
        $this->trait->expects($this->exactly(1))
            ->method('getAdapter')
            ->willReturn($adapter->reveal());

        $result = $this->trait->add($news, $keys);
        $this->assertTrue($result);
    }

    public function testEdit()
    {
        $keys = array();
        $news = \News\Utils\ObjectGenerate::generateNews(1);

        $adapter = $this->prophesize(NewsDBAdapter::class);
        $adapter->edit(Argument::exact($news), Argument::exact($keys))->shouldBeCalledTimes(1)->willReturn(true);
        $this->trait->expects($this->exactly(1))
            ->method('getAdapter')
            ->willReturn($adapter->reveal());

        $result = $this->trait->edit($news, $keys);
        $this->assertTrue($result);
    }
}
