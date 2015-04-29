<?php

namespace Plum\PlumYaml;

use Plum\Plum\Converter\ConverterInterface;
use Symfony\Component\Yaml\Yaml;

/**
 * YamlDumpConverter
 *
 * @package   Plum\PlumYaml
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2015 Florian Eckerstorfer
 */
class YamlDumpConverter implements ConverterInterface
{
    /**
     * @param array $item
     *
     * @return string
     */
    public function convert($item)
    {
        return Yaml::dump($item);
    }
}
