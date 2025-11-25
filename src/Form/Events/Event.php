<?php

namespace RuiYi\LaAdmin\Form\Events;

use RuiYi\LaAdmin\Form;

abstract class Event
{
    /**
     * @var Form
     */
    public $form;

    public $payload = [];

    public function __construct(Form $form, array $payload = [])
    {
        $this->form = $form;
        $this->payload = $payload;
    }
}
