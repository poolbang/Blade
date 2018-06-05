<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2018/6/5
 * Time: 0:12
 */

namespace Poolbang\Blade\Bean\Collector;

use Swoft\App;
use Swoft\Bean\CollectorInterface;
use Poolbang\Blade\Bean\Annotation\Blade;

/**
 *  @uses      BladeCollector
 */
class BladeCollector
{
    /**
     * @var array
     */
    private static $views = [];

    /**
     * @param string $className
     * @param object $objectAnnotation
     * @param string $propertyName
     * @param string $methodName
     * @param null   $propertyValue
     * @throws \InvalidArgumentException
     */
    public static function collect(string $className, $objectAnnotation = null, string $propertyName = '', string $methodName = '', $propertyValue = null)
    {
        if ($objectAnnotation instanceof Blade) {
            self::$views[$className]['view'][$methodName] = [
                'template' => App::getAlias($objectAnnotation->getTemplate()),
            ];
        }
    }
    /**
     * @return array
     */
    public static function getCollector()
    {
        return self::$views;
    }
}