<?php

namespace Plum\PlumYaml;

use Plum\Plum\Converter\ConverterInterface;
use Symfony\Component\Yaml\Yaml;

/**
 * YamlConverter.
 *
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 */
class YamlParseConverter implements ConverterInterface
{
    /**
     * @param mixed $item
     *
     * @return mixed
     */
    public function convert($item)
    {
        return Yaml::parse($item);
    }
}
