<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2018/6/5
 * Time: 0:29
 */

namespace Poolbang\Blade\Bootstrap;

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
        $path = ['/var/www/swoft/resources/views/'];
        $cachePath = '/var/www/swoft/runtime/views/';
        $file = new Filesystem();
        $compiler = new BladeCompiler($file, $cachePath);
        $resolver = new EngineResolver();
        $resolver->register('blade', function () use ($compiler){
            return new CompilerEngine($compiler);
        });
        $factory = new Factory($resolver, new FileViewFinder($file, $path));
        $factory->addExtension('tpl', 'blade');

        return [
            'blade'         => [
                'class'     => $factory,
            ],
        ];
    }
}