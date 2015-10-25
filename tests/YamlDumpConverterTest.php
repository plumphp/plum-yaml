<?php

namespace Plum\PlumYaml;

use PHPUnit_Framework_TestCase;

/**
 * YamlDumpConverterTest.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 * @group     unit
 */
class YamlDumpConverterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var YamlDumpConverter
     */
    private $converter;

    public function setUp()
    {
        $this->converter = new YamlDumpConverter();
    }

    /**
     * @test
     * @covers Plum\PlumYaml\YamlDumpConverter::convert()
     */
    public function convertDumpsYaml()
    {
        $this->assertStringStartsWith('foo: bar', $this->converter->convert(['foo' => 'bar']));
    }
}
