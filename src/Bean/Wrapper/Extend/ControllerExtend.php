<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2018/6/5
 * Time: 0:18
 */

namespace Poolbang\Blade\Bean\Wrapper\Extend;


use Swoft\Bean\Wrapper\Extend\WrapperExtendInterface;
use Poolbang\Blade\Bean\Annotation\Blade;

/**
 * Controller extend
 */
class ControllerExtend implements WrapperExtendInterface
{
    /**
     * @return array
     */
    public function getClassAnnotations(): array
    {
        return [];
    }
    /**
     * @return array
     */
    public function getPropertyAnnotations(): array
    {
        return [];
    }
    /**
     * @return array
     */
    public function getMethodAnnotations(): array
    {
        return [Blade::class,];
    }
    /**
     * @param array $annotations
     *
     * @return bool
     */
    public function isParseClassAnnotations(array $annotations): bool
    {
        return false;
    }
    /**
     * @param array $annotations
     *
     * @return bool
     */
    public function isParsePropertyAnnotations(array $annotations): bool
    {
        return false;
    }
    /**
     * @param array $annotations
     *
     * @return bool
     */
    public function isParseMethodAnnotations(array $annotations): bool
    {
        return isset($annotations[Blade::class]);
    }
}