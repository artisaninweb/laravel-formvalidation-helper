<?php

namespace Artisaninweb\FormValidationHelper\Extension;

use Artisaninweb\FormValidationHelper\FormBuilder;

/**
 * Access Laravels form builder in your Twig templates.
 */
class TwigBridgeForm extends \TwigBridge\Extension\Laravel\Form {

    /**
     * The constructor
     *
     * @param FormBuilder $form
     */
    public function __construct(FormBuilder $form)
    {
        $this->form = $form;
    }

}