<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2018/6/4
 * Time: 23:57
 */

namespace Poolbang\Blade\Bean\Annotation;

use Doctrine\Common\Annotations\Annotation\Target;
/**
 * @Annotation
 * @Target("METHOD")
 *
 * @uses      View
 * @version   2017-11-08
 * @author    huangzhhui <huangzhwork@gmail.com>
 * @copyright Copyright 2010-2017 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Blade
{
    /**
     * @var string
     */
    private $template = '';


    /**
     * Blade constructor.
     * @param array $values
     */
    public function __construct(array $values)
    {
        isset($values['value']) && $this->setTemplate($values['value']);
        isset($values['template']) && $this->setTemplate($values['template']);
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     * @return self
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;
        return $this;
    }
}