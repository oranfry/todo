<?php
namespace linetype;

class todo extends \Linetype {
    function __construct() {
        $this->table = 'todo';
        $this->links = [];
        $this->fields = null;
        $this->fields = [
            (object) [
                'name' => 'description',
                'type' => 'multiline',
                "fuse" => 't.description',
            ],
        ];
        $this->unfuse_fields = [
            't.description' => ':description',
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
