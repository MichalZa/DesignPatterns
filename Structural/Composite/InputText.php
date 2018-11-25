<?php

namespace Structural\Composite;

class InputText extends FormElement {

    public function render(): string
    {
        return '<input type="text" name="' . $this->getName() . '" />';
    }
}