<?php

namespace todo\linetype;

class todo extends \jars\Linetype
{
    function __construct()
    {
        $this->table = 'todo';

        $this->fields = [
            'description' => fn ($records) : string => $records['/']->description,
        ];

        $this->unfuse_fields = [
            'description' => fn ($line, $oldline) : string => $line->description,
        ];
    }

    function validate($line)
    {
        $errors = [];

        if ($line->description == null) {
            $errors[] = 'no description';
        }

        return $errors;
    }
}
