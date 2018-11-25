<?php

namespace Structural\Composite;

abstract class FormElement{

    /**
     * @var string $name
     */
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // render element
    abstract public function render(): string;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return FormElement
     */
    public function setName(string $name): FormElement
    {
        $this->name = $name;
        return $this;
    }

}