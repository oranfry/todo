<?php

namespace OranFry\ToDo\Linetypes;

use OranFry\SimpleFields\Traits\SimpleFields;

class ToDo extends \OranFry\Jars\Core\Linetype
{
    use SimpleFields;

    function __construct()
    {
        $this->table = 'todo';

        $this->simple_string('description');

        $this->fields['created'] = fn ($records) : string => $records['/']->created;
    }

    function validate($line): array
    {
        $errors = parent::validate($line);

        if ($line->description == null) {
            $errors[] = 'no description';
        }

        return $errors;
    }
}
