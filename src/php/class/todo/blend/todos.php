<?php
namespace todo\blend;

class todos extends \Blend
{
    public function __construct()
    {
        $this->label = 'To Do';
        $this->linetypes = ['todo',];
        $this->showass = ['list',];
        $this->fields = [
            (object) [
                'name' => 'description',
                'type' => 'text',
            ],
        ];
    }
}
