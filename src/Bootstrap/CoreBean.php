<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2018/6/5
 * Time: 0:29
 */

namespace Poolbang\Blade\Bootstrap;

use Poolband\Blade\Base\View;
use Swoft\Bean\Annotation\BootBean;
use Poolbang\Blade\Factory;
use Poolbang\Blade\Compilers\BladeCompiler;
use Poolbang\Blade\Engines\CompilerEngine;
use Poolbang\Blade\Engines\EngineResolver;
use Poolbang\Blade\Filesystem;
use Poolbang\Blade\FileViewFinder;

/**
 * @BootBean()
 */
class CoreBean
{
    /**
     * @return array
     */
    public function beans():array
    {

        return [
            'blade'         => [
                'class'     => View::class,
            ],
        ];
    }
}