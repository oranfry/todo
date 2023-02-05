<?php

namespace todo\linetype;

class todo extends \jars\Linetype
{
    function __construct()
    {
        $this->table = 'todo';

        $this->simple_strings('description');

        $this->fields['created'] = fn ($records) : string => $records['/']->created;
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
