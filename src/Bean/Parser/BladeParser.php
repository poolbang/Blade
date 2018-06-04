<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2018/6/5
 * Time: 0:15
 */

namespace Poolbang\Blade\Bean\Parser;

use Swoft\Bean\Parser\AbstractParser;
use Poolbang\Blade\Bean\Annotation\Blade;
use Poolbang\Blade\Bean\Collector\BladeCollector;

class BladeParser extends AbstractParser
{

    /**
     * 解析注解
     * @param string      $className
     * @param Blade      $objectAnnotation
     * @param string      $propertyName
     * @param string      $methodName
     * @param string|null $propertyValue
     * @return mixed
     */
    public function parser(
        string $className,
        $objectAnnotation = null,
        string $propertyName = '',
        string $methodName = '',
        $propertyValue = null
    )
    {
        BladeCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);
    }
}