<?php
namespace todo\linetype;

class todo extends \Linetype {
    function __construct() {
        $this->table = 'todo';
        $this->links = [];
        $this->fields = null;
        $this->fields = [
            'description' => function($records) : string {
                return $records['/']->description;
            },
        ];
        $this->unfuse_fields = [
            'description' => function($line, $oldline) : string {
                return $line->description;
            },
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
