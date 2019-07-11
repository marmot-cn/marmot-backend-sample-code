<?php
namespace News\CommandHandler\News;

use PHPUnit\Framework\TestCase;

class EnableNewsCommandHandlerTest extends TestCase
{
    private $stub;

    public function setUp()
    {
        $this->stub = new TestEnableNewsCommandHandler();
    }

    public function tearDown()
    {
        unset($this->stub);
    }

    public function testExtendsCommandHandler()
    {
        $this->assertInstanceOf(
            'Common\CommandHandler\EnableCommandHandler',
            $this->stub
        );
    }

    public function testFetchIEnableObject()
    {
        $this->stub = $this->getMockBuilder(TestEnableNewsCommandHandler::class)
                           ->setMethods([
                               'fetchNews'
                            ])->getMock();

        $id = 1;
        $news = \News\Utils\ObjectGenerate::generateNews($id);

        $this->stub->expects($this->once())
            ->method('fetchNews')
            ->willReturn($news);

        $result = $this->stub->fetchIEnableObject($id);
     
        $this->assertEquals($result, $news);
    }
}
