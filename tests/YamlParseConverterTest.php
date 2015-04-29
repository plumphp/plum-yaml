<?php


namespace Plum\PlumYaml;

use PHPUnit_Framework_TestCase;

/**
 * YamlParseConverterTest
 *
 * @package   Plum\PlumYaml
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class YamlParseConverterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var YamlParseConverter
     */
    private $converter;

    public function setUp()
    {
        $this->converter = new YamlParseConverter();
    }

    /**
     * @test
     * @covers Plum\PlumYaml\YamlParseConverter::convert()
     */
    public function convertParsesYaml()
    {
        $this->assertEquals(['foo' => 'bar'], $this->converter->convert('foo: bar'));
    }
}
