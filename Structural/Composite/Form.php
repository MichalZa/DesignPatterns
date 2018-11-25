<?php

namespace Structural\Composite;

class Form extends FormElement {

    /**
     * @var array $elements
     */
    private $elements = [];

    public function render(): string
    {
        $form = '<form name="' . $this->getName() . '">';
        /** @var FormElement $element */
        foreach ($this->elements as $element) {
            $form .= $element->render();
        }

        $form .= '</form>';

        return $form;
    }

    public function addElement(FormElement $formElement)
    {
        $this->elements[] = $formElement;
    }
}


/* use case */

$form = new Form('myForm');
$form->addElement(new InputText('username'));
$form->addElement(new InputText('password'));

$personalInfo = new Form('personalInfo');
$personalInfo->addElement(new InputText('cellPhone'));

$form->addElement($personalInfo);
echo $form->render();