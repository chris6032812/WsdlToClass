<?php

namespace WsdlToClass;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-06-22 at 19:00:18.
 */
class WsdlToClassTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var WsdlToClass
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $wsdl = $this->getMockBuilder('WsdlToClass\Wsdl\Wsdl')->disableOriginalConstructor()->getMock();
        $parser = $this->getMock('WsdlToClass\Parser\IParser');
        $generator = $this->getMock('WsdlToClass\Generator\ICompositeGenerator');
        $writer = $this->getMock('WsdlToClass\Writer\IWriter');

        $this->object = new WsdlToClass(
            $wsdl,
            '',
            '',
            $parser,
            $generator,
            $writer
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers WsdlToClass\WsdlToClass::getWsdl
     */
    public function testGetWsdl()
    {
        $this->assertInstanceOf('WsdlToClass\Wsdl\Wsdl', $this->object->getWsdl());
        $wsdl = $this->getMockBuilder('WsdlToClass\Wsdl\Wsdl')->disableOriginalConstructor()->getMock();
        $this->object->setWsdl($wsdl);
        $this->assertSame($wsdl, $this->object->getWsdl());
    }

    /**
     * @covers WsdlToClass\WsdlToClass::setWsdl
     */
    public function testSetWsdl()
    {
        $wsdl = $this->getMockBuilder('WsdlToClass\Wsdl\Wsdl')->disableOriginalConstructor()->getMock();
        $this->assertSame($this->object, $this->object->setWsdl($wsdl));
        $this->assertAttributeSame($wsdl, 'wsdl', $this->object);
    }

    /**
     * @covers WsdlToClass\WsdlToClass::getDestination
     */
    public function testGetDestination()
    {
        $this->assertSame('', $this->object->getDestination());
        $this->object->setDestination('/tmp');
        $this->assertSame('/tmp', $this->object->getDestination());
    }

    /**
     * @covers WsdlToClass\WsdlToClass::setDestination
     */
    public function testSetDestination()
    {
        $this->assertSame($this->object, $this->object->setDestination('/dev/null'));
        $this->assertAttributeSame('/dev/null', 'destination', $this->object);
    }

    /**
     * @covers WsdlToClass\WsdlToClass::getNamespacePrefix
     */
    public function testGetNamespacePrefix()
    {
        $this->assertSame('', $this->object->getNamespacePrefix());
        $this->object->setNamespacePrefix('Soap\Test');
        $this->assertSame('Soap\Test', $this->object->getNamespacePrefix());
    }

    /**
     * @covers WsdlToClass\WsdlToClass::setNamespacePrefix
     */
    public function testSetNamespacePrefix()
    {
        $this->assertSame($this->object, $this->object->setNamespacePrefix('Impl\Soap'));
        $this->assertAttributeSame('Impl\Soap', 'namespacePrefix', $this->object);
    }

    /**
     * @covers WsdlToClass\WsdlToClass::getOutput
     * @todo   Implement testGetOutput().
     */
    public function testGetOutput()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers WsdlToClass\WsdlToClass::setOutput
     * @todo   Implement testSetOutput().
     */
    public function testSetOutput()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers WsdlToClass\WsdlToClass::getParser
     */
    public function testGetParser()
    {
        $this->assertInstanceOf('WsdlToClass\Parser\IParser', $this->object->getParser());
        $parser = $this->getMock('WsdlToClass\Parser\IParser');
        $this->object->setParser($parser);
        $this->assertSame($parser, $this->object->getParser());
    }

    /**
     * @covers WsdlToClass\WsdlToClass::setParser
     */
    public function testSetParser()
    {
        $parser = $this->getMock('WsdlToClass\Parser\IParser');
        $this->assertSame($this->object, $this->object->setParser($parser));
        $this->assertAttributeSame($parser, 'parser', $this->object);
    }

    /**
     * @covers WsdlToClass\WsdlToClass::getGenerator
     */
    public function testGetGenerator()
    {
        $this->assertInstanceOf('WsdlToClass\Generator\ICompositeGenerator', $this->object->getGenerator());
        $generator = $this->getMock('WsdlToClass\Generator\ICompositeGenerator');
        $this->object->setGenerator($generator);
        $this->assertSame($generator, $this->object->getGenerator());
    }

    /**
     * @covers WsdlToClass\WsdlToClass::setGenerator
     */
    public function testSetGenerator()
    {
        $generator = $this->getMock('WsdlToClass\Generator\ICompositeGenerator');
        $this->assertSame($this->object, $this->object->setGenerator($generator));
        $this->assertAttributeSame($generator, 'generator', $this->object);
    }

    /**
     * @covers WsdlToClass\WsdlToClass::execute
     * @todo   Implement testExecute().
     */
    public function testExecute()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}