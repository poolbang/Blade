<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2018/6/4
 * Time: 23:57
 */

namespace Poolbang\Blade\Bean\Annotation;

/**
 * @Annotation
 * @Target("METHOD")
 */
class Blade
{
    /**
     * @var string
     */
    private $template = '';


    /**
     * View constructor.
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