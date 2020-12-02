<?php
namespace todo\linetype;

class todo extends \Linetype {
    function __construct() {
        $this->table = 'todo';
        $this->links = [];
        $this->fields = null;
        $this->fields = [
            (object) [
                'name' => 'description',
                'type' => 'multiline',
                "fuse" => '{t}.description',
            ],
        ];
        $this->unfuse_fields = [
            '{t}.description' => (object) [
                'expression' => ':{t}_description',
                'type' => 'text',
            ],
        ];
    }

    function validate($line) {
        $errors = [];

        if ($line->description == null) {
            $errors[] = 'no description';
        }

        return $errors;
    }
}
